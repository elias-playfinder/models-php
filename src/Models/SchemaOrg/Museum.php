<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Museum extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Museum";
    }

}
