<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ExerciseGym extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ExerciseGym";
    }

}
