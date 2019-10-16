<?php

namespace OpenActive;

use OpenActive\Validators\BaseValidator;
use OpenActive\Helpers\DateInterval as DateIntervalHelper;
use OpenActive\Helpers\DateTime as DateTimeHelper;
use OpenActive\Helpers\JsonLd as JsonLdHelper;
use OpenActive\Helpers\Str;

class BaseModel
{
    /**
     * This must be included in the top-most entity in the JSON model.
     *
     * @var string[]
     */
    public static $context = [
        "https://openactive.io/",
        "https://openactive.io/ns-beta"
    ];

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            // Make sure attribute is cased properly
            $attributeName = Str::camel($key);

            $this->$attributeName = $value;
        }
    }

    /**
     * Returns an object from a given JSON-LD representation.
     *
     * @param string|array If a string is provided, we attempt JSON-decoding first
     * @return object
     */
    public static function deserialize($data)
    {
        // If a string is provided, we attempt JSON-decoding first
        if(is_string($data)) {
            $data = json_decode($data, true);
        }

        $class = get_called_class();
        $self = new $class([]);

        // If data provided is not an array, return an empty class
        if(is_array($data) === FALSE) {
            return $self;
        }

        foreach ($data as $key => $value) {
            $attrName = Str::pascal($key);

            if (is_object($value)) {
                $self->$attrName = $value::deserialize($value);
            } else {
                $self->$attrName = $value;
            }
        }

        return $self;
    }

    /**
     * Returns the JSON-LD representation of the given instance.
     *
     * @param \OpenActive\BaseModel $obj The given instance to convert to JSON-LD
     * @return string JSON-LD string representation of the given instance.
     */
    public static function serialize($obj)
    {
        // Get data ready to be encoded
        $data = self::prepareDataForSerialization($obj);

        $json = json_encode($data);

        return self::removeAllButFirstContext($json);
    }

    /**
     * Returns an associative array with the data ready for JSON-LD serialization.
     *
     * @param \OpenActive\BaseModel $obj The given instance to convert to JSON-LD
     * @return array
     */
    public static function prepareDataForSerialization($obj)
    {
        // Get all defined methods for the object
        // Please note we don't use get_object_vars() here,
        // As it would only return the public attributes
        // (BaseModel's are all protected)
        $classMethods = get_class_methods($obj);

        $data = array();

        // Add context - this will get the called class's context
        $data["@context"] = static::$context;

        // Get JSON-LD type
        $data["type"] = JsonLdHelper::getType($obj);

        // Loop all class methods, find the getters
        // and map defined attributes, normalizing attribute name
        foreach($classMethods as $methodName) {
            if(substr($methodName, 0, 3) !== "get") {
                continue;
            }

            // Attribute name is method name without the leading "get" string,
            // and camel-cased
            $attrName = Str::camel(substr($methodName, 3));

            // Attribute value is the result of calling $methodName on $obj
            $attrValue = $obj->$methodName();

            if(is_array($attrValue)) {
                // If attribute value is an array,
                // get data for serialization from each of the item.
                foreach($attrValue as $idx => $item) {
                    // Get fully qualified namespace of the item's class name
                    $fq_classname = "\\".get_class($item);

                    $attrValue[$idx] = $fq_classname::prepareDataForSerialization(
                        $item
                    );
                }
            } else if(is_object($attrValue)) {
                // If attribute value is an object,
                // get the data for the individual object

                // Get fully qualified namespace of the item's class name
                $fq_classname = "\\".get_class($attrValue);

                switch ($fq_classname) {
                    case "\\DateInterval":
                        // Get interval spec string, e.g. "P1D"
                        $attrValue = DateIntervalHelper::specString($attrValue);
                        break;
                    case "\\DateTime":
                        // Get ISO 8601 date time representation,
                        // e.g. "2019-01-01T00:00:00-08:00"
                        $attrValue = DateTimeHelper::iso8601($attrValue);
                        break;
                    default:
                        $attrValue = $fq_classname::prepareDataForSerialization(
                            $attrValue
                        );
                }
            }

            $data[$attrName] = $attrValue;
        }

        // Remove empty elements
        return array_filter($data);
    }

    public function __get($name)
    {
        // Always makes sure name casing is correct
        if (property_exists($this, Str::camel($name))) {
            $method = 'get' . Str::pascal($name);

            return $this->$method();
        }
    }

    public function __set($name, $value)
    {
        // Always makes sure name casing is correct
        if (property_exists($this, Str::camel($name))) {
            $method = 'set' . Str::pascal($name);

            $this->$method($value);
        }
    }

    public function __isset($name)
    {
        if ($this->__get($name) === null) {
            return false;
        }
    }

    /**
     * Check if the given value is of at least one of the given types.
     *
     * @param mixed $value
     * @param string[] $types
     * @return bool
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public static function checkTypes($value, $types)
    {
        foreach($types as $type) {
            $validator = BaseValidator::getValidator($type);

            if($validator->run($value) === true) {
                // If validation passes for the given type
                // We coerce the type to mitigate PHP loose types
                return $validator->coerce($value);
            }
        }

        // If validation does not pass for any of the provided types,
        // type invalid
        // TODO bootstrap TypeError for PHP<7 compatibility
        throw new \Exception("The first argument type does not match any of the declared parameter types.");
    }

    /**
     * Remove all "@context" attributes from the given JSON-LD string,
     * leaving only the first occurrence.
     *
     * @param string $json
     * @return string
     * @see https://github.com/openactive/OpenActive.NET/blob/master/OpenActive.NET/OpenActiveSerializer.cs#L113 For .NET implementation
     */
    protected static function removeAllButFirstContext($json)
    {
        // OpenActive beta's context JSON-LD representation
        $openActiveContextPropertyWithBeta = "\"@context\":[\"https:\\/\\/openactive.io\\/\",\"https:\\/\\/openactive.io\\/ns-beta\"],";

        // Get the index of first character after context within the JSON
        // We add the one to represent the opening curly brace.
        $startIndex = strlen($openActiveContextPropertyWithBeta) + 1;

        // The resulting JSON is the context string,
        // with the additional context strings removed
        $json = "{".
            $openActiveContextPropertyWithBeta.
            str_replace(
                $openActiveContextPropertyWithBeta,
                "",
                substr($json, $startIndex)
            );

        return $json;

        // Conversion of the .NET implementation is provided below for reference
        // but not actually use as PHP implementation makes certain assumptions
        // around context, type, and id that .NET does not.
        // I.e. "@context" is always OpenActive and OpenActive beta's,
        // "type" will always be deduced from the class name in serialize()
        // $schemaContextProperty = "\"@context\":\"http://schema.org\",";
        // $openActiveContextProperty = "\"@context\":\"https://openactive.io/\",";
        // $openActiveContextPropertyWithBeta = "\"@context\":[\"https://openactive.io/\",\"https://openactive.io/ns-beta\"],";

        // The following don't need to be defined as not used below
        // $schemaIdJson = "\"@id\":";
        // $openActiveIdJson = "\"id\":";
        // $schemaTypeJson = "\"@type\":";
        // $openActiveTypeJson = "\"type\":";

        // Only include beta context if there are beta properties present
        // $contextProperty = strpos($json, "\"beta:") !== FALSE ?
        //     $openActiveContextPropertyWithBeta :
        //     $openActiveContextProperty;

        // We add the one to represent the opening curly brace.
        // $startIndex = strlen($schemaContextProperty) + 1;

        // Replace OpenActive context and properties

        // Context should be only OpenActive's so no need for below
        // $json = substr_replace($schemaContextProperty, "", $startIndex, strlen($json) - $startIndex);
        // $json = substr_replace($schemaContextProperty, $contextProperty, 0, $startIndex);

        // These 2 shouldn't be included in the PHP classes so are not performed
        // $json = substr_replace($schemaIdJson, $openActiveIdJson, 0, strlen($json));
        // $json = substr_replace($schemaTypeJson, $openActiveTypeJson, 0, strlen($json));

        // return $json;
    }
}
