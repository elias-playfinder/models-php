<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Church extends \OpenActive\Models\SchemaOrg\PlaceOfWorship
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Church";
    }

}
