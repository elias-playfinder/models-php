<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MovingCompany extends \OpenActive\Models\SchemaOrg\HomeAndConstructionBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MovingCompany";
    }

}
