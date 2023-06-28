<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Dataset extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Dataset";
    }

    public static function fieldList() {
        $fields = [
            "issn" => "issn",
            "catalog" => "catalog",
            "measurementMethod" => "measurementMethod",
            "datasetTimeInterval" => "datasetTimeInterval",
            "measurementTechnique" => "measurementTechnique",
            "includedDataCatalog" => "includedDataCatalog",
            "includedInDataCatalog" => "includedInDataCatalog",
            "distribution" => "distribution",
            "variableMeasured" => "variableMeasured",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     *
     *
     * @var string
     */
    protected $issn;

    /**
     * A data catalog which contains this dataset.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    protected $catalog;

    /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|string|null
     */
    protected $measurementMethod;

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     *
     *
     * @var DateTime|null
     */
    protected $datasetTimeInterval;

    /**
     * A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable.
     *     
     * The [[measurementTechnique]] property helps when extra clarification is needed about how a [[measuredProperty]] was measured. This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but can often serve as a high level summary for dataset discovery. 
     * 
     * For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence". If the [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". 
     * 
     * If there are several [[variableMeasured]] properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]]. The value can also be from an enumeration, organized as a [[MeasurementMetholdEnumeration]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|null
     */
    protected $measurementTechnique;

    /**
     * A data catalog which contains this dataset (this property was previously 'catalog', preferred name is now 'includedInDataCatalog').
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    protected $includedDataCatalog;

    /**
     * A data catalog which contains this dataset.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    protected $includedInDataCatalog;

    /**
     * A downloadable form of this dataset, at a specific location, in a specific format. This property can be repeated if different variations are available. There is no expectation that different downloadable distributions must contain exactly equivalent information (see also [DCAT](https://www.w3.org/TR/vocab-dcat-3/#Class:Distribution) on this point). Different distributions might include or exclude different subsets of the entire dataset, for example.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataDownload|string
     */
    protected $distribution;

    /**
     * The variableMeasured property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue, or more explicitly as a [[StatisticalVariable]].
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\StatisticalVariable|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Enums\PropertyEnumeration|null
     */
    protected $variableMeasured;

    /**
     * @return string
     */
    public function getIssn()
    {
        return $this->issn;
    }

    /**
     * @param string $issn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssn($issn)
    {
        $types = [
            "string",
        ];

        $issn = self::checkTypes($issn, $types);

        $this->issn = $issn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataCatalog|string $catalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCatalog($catalog)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataCatalog",
            "string",
        ];

        $catalog = self::checkTypes($catalog, $types);

        $this->catalog = $catalog;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|string|null
     */
    public function getMeasurementMethod()
    {
        return $this->measurementMethod;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|string|null $measurementMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasurementMethod($measurementMethod)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum",
            "string",
            "null",
        ];

        $measurementMethod = self::checkTypes($measurementMethod, $types);

        $this->measurementMethod = $measurementMethod;
    }

    /**
     * @return DateTime|null
     */
    public function getDatasetTimeInterval()
    {
        return $this->datasetTimeInterval;
    }

    /**
     * @param DateTime|null $datasetTimeInterval
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatasetTimeInterval($datasetTimeInterval)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $datasetTimeInterval = self::checkTypes($datasetTimeInterval, $types);

        $this->datasetTimeInterval = $datasetTimeInterval;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|null
     */
    public function getMeasurementTechnique()
    {
        return $this->measurementTechnique;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum|null $measurementTechnique
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasurementTechnique($measurementTechnique)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Enums\SchemaOrg\MeasurementMethodEnum",
            "null",
        ];

        $measurementTechnique = self::checkTypes($measurementTechnique, $types);

        $this->measurementTechnique = $measurementTechnique;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    public function getIncludedDataCatalog()
    {
        return $this->includedDataCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataCatalog|string $includedDataCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludedDataCatalog($includedDataCatalog)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataCatalog",
            "string",
        ];

        $includedDataCatalog = self::checkTypes($includedDataCatalog, $types);

        $this->includedDataCatalog = $includedDataCatalog;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataCatalog|string
     */
    public function getIncludedInDataCatalog()
    {
        return $this->includedInDataCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataCatalog|string $includedInDataCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludedInDataCatalog($includedInDataCatalog)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataCatalog",
            "string",
        ];

        $includedInDataCatalog = self::checkTypes($includedInDataCatalog, $types);

        $this->includedInDataCatalog = $includedInDataCatalog;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataDownload|string
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataDownload|string $distribution
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDistribution($distribution)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataDownload",
            "string",
        ];

        $distribution = self::checkTypes($distribution, $types);

        $this->distribution = $distribution;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\StatisticalVariable|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Enums\PropertyEnumeration|null
     */
    public function getVariableMeasured()
    {
        return $this->variableMeasured;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\StatisticalVariable|\OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Enums\PropertyEnumeration|null $variableMeasured
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVariableMeasured($variableMeasured)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\StatisticalVariable",
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "\OpenActive\Enums\PropertyEnumeration",
            "null",
        ];

        $variableMeasured = self::checkTypes($variableMeasured, $types);

        $this->variableMeasured = $variableMeasured;
    }

}
