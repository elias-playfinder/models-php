<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Thing extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Thing";
    }

    public static function fieldList() {
        $fields = [
            "identifier" => "identifier",
            "name" => "name",
            "description" => "description",
            "mainEntityOfPage" => "mainEntityOfPage",
            "disambiguatingDescription" => "disambiguatingDescription",
            "additionalType" => "additionalType",
            "sameAs" => "sameAs",
            "alternateName" => "alternateName",
            "image" => "image",
            "potentialAction" => "potentialAction",
            "subjectOf" => "subjectOf",
            "url" => "url",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.
     *         
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $identifier;

    /**
     * The name of the item.
     *
     *
     * @var string
     */
    protected $name;

    /**
     * A description of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TextObject|string
     */
    protected $description;

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $mainEntityOfPage;

    /**
     * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.
     *
     *
     * @var string
     */
    protected $disambiguatingDescription;

    /**
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. Typically the value is a URI-identified RDF class, and in this case corresponds to the 
     *     use of rdf:type in RDF. Text values can be used sparingly, for cases where useful information can be added without their being an appropriate schema to reference. In the case of text values, the class label should follow the schema.org <a href="https://schema.org/docs/styleguide.html">style guide</a>
     *
     *
     * @var string
     */
    protected $additionalType;

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or official website.
     *
     *
     * @var string
     */
    protected $sameAs;

    /**
     * An alias for the item.
     *
     *
     * @var string
     */
    protected $alternateName;

    /**
     * An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    protected $image;

    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Action|string
     */
    protected $potentialAction;

    /**
     * A CreativeWork or Event about this Thing.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Event|string
     */
    protected $subjectOf;

    /**
     * URL of the item.
     *
     *
     * @var string
     */
    protected $url;

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|string $identifier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIdentifier($identifier)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        ];

        $identifier = self::checkTypes($identifier, $types);

        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = [
            "string",
        ];

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\TextObject|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TextObject|string $description
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDescription($description)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\TextObject",
            "string",
        ];

        $description = self::checkTypes($description, $types);

        $this->description = $description;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getMainEntityOfPage()
    {
        return $this->mainEntityOfPage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $mainEntityOfPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMainEntityOfPage($mainEntityOfPage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $mainEntityOfPage = self::checkTypes($mainEntityOfPage, $types);

        $this->mainEntityOfPage = $mainEntityOfPage;
    }

    /**
     * @return string
     */
    public function getDisambiguatingDescription()
    {
        return $this->disambiguatingDescription;
    }

    /**
     * @param string $disambiguatingDescription
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDisambiguatingDescription($disambiguatingDescription)
    {
        $types = [
            "string",
        ];

        $disambiguatingDescription = self::checkTypes($disambiguatingDescription, $types);

        $this->disambiguatingDescription = $disambiguatingDescription;
    }

    /**
     * @return string
     */
    public function getAdditionalType()
    {
        return $this->additionalType;
    }

    /**
     * @param string $additionalType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalType($additionalType)
    {
        $types = [
            "string",
        ];

        $additionalType = self::checkTypes($additionalType, $types);

        $this->additionalType = $additionalType;
    }

    /**
     * @return string
     */
    public function getSameAs()
    {
        return $this->sameAs;
    }

    /**
     * @param string $sameAs
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSameAs($sameAs)
    {
        $types = [
            "string",
        ];

        $sameAs = self::checkTypes($sameAs, $types);

        $this->sameAs = $sameAs;
    }

    /**
     * @return string
     */
    public function getAlternateName()
    {
        return $this->alternateName;
    }

    /**
     * @param string $alternateName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlternateName($alternateName)
    {
        $types = [
            "string",
        ];

        $alternateName = self::checkTypes($alternateName, $types);

        $this->alternateName = $alternateName;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\ImageObject $image
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setImage($image)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\ImageObject",
        ];

        $image = self::checkTypes($image, $types);

        $this->image = $image;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Action|string
     */
    public function getPotentialAction()
    {
        return $this->potentialAction;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Action|string $potentialAction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPotentialAction($potentialAction)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Action",
            "string",
        ];

        $potentialAction = self::checkTypes($potentialAction, $types);

        $this->potentialAction = $potentialAction;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Event|string
     */
    public function getSubjectOf()
    {
        return $this->subjectOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Event|string $subjectOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubjectOf($subjectOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\Event",
            "string",
        ];

        $subjectOf = self::checkTypes($subjectOf, $types);

        $this->subjectOf = $subjectOf;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUrl($url)
    {
        $types = [
            "string",
        ];

        $url = self::checkTypes($url, $types);

        $this->url = $url;
    }

}
