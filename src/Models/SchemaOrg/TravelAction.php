<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TravelAction extends \OpenActive\Models\SchemaOrg\MoveAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TravelAction";
    }

    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance
     */
    protected $distance;

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance $distance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistance($distance)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Distance",
        );

        $distance = self::checkTypes($distance, $types);

        $this->distance = $distance;
    }

}
