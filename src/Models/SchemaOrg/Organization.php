<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Organization extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Organization";
    }

    public static function fieldList() {
        $fields = [
            "logo" => "logo",
            "foundingLocation" => "foundingLocation",
            "telephone" => "telephone",
            "seeks" => "seeks",
            "knowsLanguage" => "knowsLanguage",
            "foundingDate" => "foundingDate",
            "actionableFeedbackPolicy" => "actionableFeedbackPolicy",
            "founder" => "founder",
            "location" => "location",
            "serviceArea" => "serviceArea",
            "iso6523Code" => "iso6523Code",
            "correctionsPolicy" => "correctionsPolicy",
            "email" => "email",
            "brand" => "brand",
            "diversityPolicy" => "diversityPolicy",
            "contactPoints" => "contactPoints",
            "naics" => "naics",
            "founders" => "founders",
            "makesOffer" => "makesOffer",
            "publishingPrinciples" => "publishingPrinciples",
            "funding" => "funding",
            "keywords" => "keywords",
            "review" => "review",
            "aggregateRating" => "aggregateRating",
            "interactionStatistic" => "interactionStatistic",
            "employee" => "employee",
            "dissolutionDate" => "dissolutionDate",
            "hasOfferCatalog" => "hasOfferCatalog",
            "contactPoint" => "contactPoint",
            "isicV4" => "isicV4",
            "vatID" => "vatID",
            "reviews" => "reviews",
            "slogan" => "slogan",
            "parentOrganization" => "parentOrganization",
            "event" => "event",
            "department" => "department",
            "funder" => "funder",
            "ethicsPolicy" => "ethicsPolicy",
            "numberOfEmployees" => "numberOfEmployees",
            "diversityStaffingReport" => "diversityStaffingReport",
            "legalName" => "legalName",
            "members" => "members",
            "memberOf" => "memberOf",
            "hasCredential" => "hasCredential",
            "sponsor" => "sponsor",
            "hasMerchantReturnPolicy" => "hasMerchantReturnPolicy",
            "taxID" => "taxID",
            "leiCode" => "leiCode",
            "awards" => "awards",
            "subOrganization" => "subOrganization",
            "unnamedSourcesPolicy" => "unnamedSourcesPolicy",
            "member" => "member",
            "alumni" => "alumni",
            "ownershipFundingInfo" => "ownershipFundingInfo",
            "faxNumber" => "faxNumber",
            "areaServed" => "areaServed",
            "nonprofitStatus" => "nonprofitStatus",
            "owns" => "owns",
            "events" => "events",
            "hasPOS" => "hasPOS",
            "knowsAbout" => "knowsAbout",
            "address" => "address",
            "duns" => "duns",
            "employees" => "employees",
            "award" => "award",
            "globalLocationNumber" => "globalLocationNumber",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An associated logo.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    protected $logo;

    /**
     * The place where the Organization was founded.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $foundingLocation;

    /**
     * The telephone number.
     *
     *
     * @var string
     */
    protected $telephone;

    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|string
     */
    protected $seeks;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $knowsLanguage;

    /**
     * The date that this organization was founded.
     *
     *
     * @var Date|null
     */
    protected $foundingDate;

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $actionableFeedbackPolicy;

    /**
     * A person who founded this organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $founder;

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress|string|\OpenActive\Models\SchemaOrg\VirtualLocation
     */
    protected $location;

    /**
     * The geographic area where the service is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|string
     */
    protected $serviceArea;

    /**
     * An organization identifier as defined in ISO 6523(-1). Note that many existing organization identifiers such as [leiCode](https://schema.org/leiCode), [duns](https://schema.org/duns) and [vatID](https://schema.org/vatID) can be expressed as an ISO 6523 identifier by setting the ICD part of the ISO 6523 identifier accordingly. 
     *
     *
     * @var string
     */
    protected $iso6523Code;

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $correctionsPolicy;

    /**
     * Email address.
     *
     *
     * @var string
     */
    protected $email;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $brand;

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $diversityPolicy;

    /**
     * A contact point for a person or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $contactPoints;

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     *
     * @var string
     */
    protected $naics;

    /**
     * A person who founded this organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $founders;

    /**
     * A pointer to products or services offered by the organization or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer|string
     */
    protected $makesOffer;

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]] writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]].
     * 
     * While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology.
     * 
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $publishingPrinciples;

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Grant|string
     */
    protected $funding;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $keywords;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $review;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    protected $aggregateRating;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\InteractionCounter|string
     */
    protected $interactionStatistic;

    /**
     * Someone working for this organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $employee;

    /**
     * The date that this organization was dissolved.
     *
     *
     * @var Date|null
     */
    protected $dissolutionDate;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OfferCatalog|string
     */
    protected $hasOfferCatalog;

    /**
     * A contact point for a person or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    protected $contactPoint;

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     *
     * @var string
     */
    protected $isicV4;

    /**
     * The Value-added Tax ID of the organization or person.
     *
     *
     * @var string
     */
    protected $vatID;

    /**
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $reviews;

    /**
     * A slogan or motto associated with the item.
     *
     *
     * @var string
     */
    protected $slogan;

    /**
     * The larger organization that this organization is a [[subOrganization]] of, if any.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $parentOrganization;

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event|string
     */
    protected $event;

    /**
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $department;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $funder;

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $ethicsPolicy;

    /**
     * The number of employees in an organization, e.g. business.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $numberOfEmployees;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Article
     */
    protected $diversityStaffingReport;

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     *
     * @var string
     */
    protected $legalName;

    /**
     * A member of this organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $members;

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ProgramMembership|string
     */
    protected $memberOf;

    /**
     * A credential awarded to the Person or Organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    protected $hasCredential;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $sponsor;

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MerchantReturnPolicy|string
     */
    protected $hasMerchantReturnPolicy;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     *
     *
     * @var string
     */
    protected $taxID;

    /**
     * An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
     *
     *
     * @var string
     */
    protected $leiCode;

    /**
     * Awards won by or for this item.
     *
     *
     * @var string
     */
    protected $awards;

    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $subOrganization;

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $unnamedSourcesPolicy;

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $member;

    /**
     * Alumni of an organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $alumni;

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence.   Note that the [[funder]] is also available and can be used to make basic funder information machine-readable.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AboutPage|string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $ownershipFundingInfo;

    /**
     * The fax number.
     *
     *
     * @var string
     */
    protected $faxNumber;

    /**
     * The geographic area where a service or offered item is provided.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $areaServed;

    /**
     * nonprofitStatus indicates the legal status of a non-profit organization in its primary place of business.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\NonprofitType|null
     */
    protected $nonprofitStatus;

    /**
     * Products owned by the organization or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\OwnershipInfo|\OpenActive\Models\SchemaOrg\Product|string
     */
    protected $owns;

    /**
     * Upcoming or past events associated with this place or organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event|string
     */
    protected $events;

    /**
     * Points-of-Sales operated by the organization or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $hasPOS;

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]] descriptions.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $knowsAbout;

    /**
     * Physical address of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    protected $address;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     *
     *
     * @var string
     */
    protected $duns;

    /**
     * People working for this organization.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $employees;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     *
     * @var string
     */
    protected $globalLocationNumber;

    /**
     * @return \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject|string $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ImageObject",
            "string",
        ];

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getFoundingLocation()
    {
        return $this->foundingLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $foundingLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFoundingLocation($foundingLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $foundingLocation = self::checkTypes($foundingLocation, $types);

        $this->foundingLocation = $foundingLocation;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTelephone($telephone)
    {
        $types = [
            "string",
        ];

        $telephone = self::checkTypes($telephone, $types);

        $this->telephone = $telephone;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Demand|string
     */
    public function getSeeks()
    {
        return $this->seeks;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|string $seeks
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeeks($seeks)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Demand",
            "string",
        ];

        $seeks = self::checkTypes($seeks, $types);

        $this->seeks = $seeks;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getKnowsLanguage()
    {
        return $this->knowsLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $knowsLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKnowsLanguage($knowsLanguage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        ];

        $knowsLanguage = self::checkTypes($knowsLanguage, $types);

        $this->knowsLanguage = $knowsLanguage;
    }

    /**
     * @return Date|null
     */
    public function getFoundingDate()
    {
        return $this->foundingDate;
    }

    /**
     * @param Date|null $foundingDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFoundingDate($foundingDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $foundingDate = self::checkTypes($foundingDate, $types);

        $this->foundingDate = $foundingDate;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getActionableFeedbackPolicy()
    {
        return $this->actionableFeedbackPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $actionableFeedbackPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActionableFeedbackPolicy($actionableFeedbackPolicy)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $actionableFeedbackPolicy = self::checkTypes($actionableFeedbackPolicy, $types);

        $this->actionableFeedbackPolicy = $actionableFeedbackPolicy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getFounder()
    {
        return $this->founder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $founder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFounder($founder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $founder = self::checkTypes($founder, $types);

        $this->founder = $founder;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress|string|\OpenActive\Models\SchemaOrg\VirtualLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\PostalAddress|string|\OpenActive\Models\SchemaOrg\VirtualLocation $location
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLocation($location)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "string",
            "\OpenActive\Models\SchemaOrg\VirtualLocation",
        ];

        $location = self::checkTypes($location, $types);

        $this->location = $location;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|string
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|\OpenActive\Models\SchemaOrg\AdministrativeArea|\OpenActive\Models\SchemaOrg\GeoShape|string $serviceArea
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setServiceArea($serviceArea)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "string",
        ];

        $serviceArea = self::checkTypes($serviceArea, $types);

        $this->serviceArea = $serviceArea;
    }

    /**
     * @return string
     */
    public function getIso6523Code()
    {
        return $this->iso6523Code;
    }

    /**
     * @param string $iso6523Code
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIso6523Code($iso6523Code)
    {
        $types = [
            "string",
        ];

        $iso6523Code = self::checkTypes($iso6523Code, $types);

        $this->iso6523Code = $iso6523Code;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getCorrectionsPolicy()
    {
        return $this->correctionsPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $correctionsPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCorrectionsPolicy($correctionsPolicy)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $correctionsPolicy = self::checkTypes($correctionsPolicy, $types);

        $this->correctionsPolicy = $correctionsPolicy;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmail($email)
    {
        $types = [
            "string",
        ];

        $email = self::checkTypes($email, $types);

        $this->email = $email;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization|string $brand
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBrand($brand)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Brand",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $brand = self::checkTypes($brand, $types);

        $this->brand = $brand;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getDiversityPolicy()
    {
        return $this->diversityPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $diversityPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiversityPolicy($diversityPolicy)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $diversityPolicy = self::checkTypes($diversityPolicy, $types);

        $this->diversityPolicy = $diversityPolicy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    public function getContactPoints()
    {
        return $this->contactPoints;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|string $contactPoints
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactPoints($contactPoints)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "string",
        ];

        $contactPoints = self::checkTypes($contactPoints, $types);

        $this->contactPoints = $contactPoints;
    }

    /**
     * @return string
     */
    public function getNaics()
    {
        return $this->naics;
    }

    /**
     * @param string $naics
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNaics($naics)
    {
        $types = [
            "string",
        ];

        $naics = self::checkTypes($naics, $types);

        $this->naics = $naics;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getFounders()
    {
        return $this->founders;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $founders
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFounders($founders)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $founders = self::checkTypes($founders, $types);

        $this->founders = $founders;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer|string
     */
    public function getMakesOffer()
    {
        return $this->makesOffer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer|string $makesOffer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMakesOffer($makesOffer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Offer",
            "string",
        ];

        $makesOffer = self::checkTypes($makesOffer, $types);

        $this->makesOffer = $makesOffer;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getPublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $publishingPrinciples
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublishingPrinciples($publishingPrinciples)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $publishingPrinciples = self::checkTypes($publishingPrinciples, $types);

        $this->publishingPrinciples = $publishingPrinciples;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Grant|string
     */
    public function getFunding()
    {
        return $this->funding;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Grant|string $funding
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunding($funding)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Grant",
            "string",
        ];

        $funding = self::checkTypes($funding, $types);

        $this->funding = $funding;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $keywords
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKeywords($keywords)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $keywords = self::checkTypes($keywords, $types);

        $this->keywords = $keywords;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $review
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReview($review)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AggregateRating|string $aggregateRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateRating($aggregateRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AggregateRating",
            "string",
        ];

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\InteractionCounter|string
     */
    public function getInteractionStatistic()
    {
        return $this->interactionStatistic;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\InteractionCounter|string $interactionStatistic
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractionStatistic($interactionStatistic)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\InteractionCounter",
            "string",
        ];

        $interactionStatistic = self::checkTypes($interactionStatistic, $types);

        $this->interactionStatistic = $interactionStatistic;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $employee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmployee($employee)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $employee = self::checkTypes($employee, $types);

        $this->employee = $employee;
    }

    /**
     * @return Date|null
     */
    public function getDissolutionDate()
    {
        return $this->dissolutionDate;
    }

    /**
     * @param Date|null $dissolutionDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDissolutionDate($dissolutionDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $dissolutionDate = self::checkTypes($dissolutionDate, $types);

        $this->dissolutionDate = $dissolutionDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OfferCatalog|string
     */
    public function getHasOfferCatalog()
    {
        return $this->hasOfferCatalog;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OfferCatalog|string $hasOfferCatalog
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasOfferCatalog($hasOfferCatalog)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OfferCatalog",
            "string",
        ];

        $hasOfferCatalog = self::checkTypes($hasOfferCatalog, $types);

        $this->hasOfferCatalog = $hasOfferCatalog;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ContactPoint|string
     */
    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ContactPoint|string $contactPoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactPoint($contactPoint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "string",
        ];

        $contactPoint = self::checkTypes($contactPoint, $types);

        $this->contactPoint = $contactPoint;
    }

    /**
     * @return string
     */
    public function getIsicV4()
    {
        return $this->isicV4;
    }

    /**
     * @param string $isicV4
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsicV4($isicV4)
    {
        $types = [
            "string",
        ];

        $isicV4 = self::checkTypes($isicV4, $types);

        $this->isicV4 = $isicV4;
    }

    /**
     * @return string
     */
    public function getVatID()
    {
        return $this->vatID;
    }

    /**
     * @param string $vatID
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVatID($vatID)
    {
        $types = [
            "string",
        ];

        $vatID = self::checkTypes($vatID, $types);

        $this->vatID = $vatID;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $reviews
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviews($reviews)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $reviews = self::checkTypes($reviews, $types);

        $this->reviews = $reviews;
    }

    /**
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * @param string $slogan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSlogan($slogan)
    {
        $types = [
            "string",
        ];

        $slogan = self::checkTypes($slogan, $types);

        $this->slogan = $slogan;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getParentOrganization()
    {
        return $this->parentOrganization;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $parentOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setParentOrganization($parentOrganization)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $parentOrganization = self::checkTypes($parentOrganization, $types);

        $this->parentOrganization = $parentOrganization;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event|string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event|string $event
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvent($event)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
            "string",
        ];

        $event = self::checkTypes($event, $types);

        $this->event = $event;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $department
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepartment($department)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $department = self::checkTypes($department, $types);

        $this->department = $department;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getFunder()
    {
        return $this->funder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $funder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunder($funder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $funder = self::checkTypes($funder, $types);

        $this->funder = $funder;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getEthicsPolicy()
    {
        return $this->ethicsPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $ethicsPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEthicsPolicy($ethicsPolicy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $ethicsPolicy = self::checkTypes($ethicsPolicy, $types);

        $this->ethicsPolicy = $ethicsPolicy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $numberOfEmployees
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $numberOfEmployees = self::checkTypes($numberOfEmployees, $types);

        $this->numberOfEmployees = $numberOfEmployees;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Article
     */
    public function getDiversityStaffingReport()
    {
        return $this->diversityStaffingReport;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Article $diversityStaffingReport
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiversityStaffingReport($diversityStaffingReport)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Article",
        ];

        $diversityStaffingReport = self::checkTypes($diversityStaffingReport, $types);

        $this->diversityStaffingReport = $diversityStaffingReport;
    }

    /**
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * @param string $legalName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegalName($legalName)
    {
        $types = [
            "string",
        ];

        $legalName = self::checkTypes($legalName, $types);

        $this->legalName = $legalName;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $members
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMembers($members)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $members = self::checkTypes($members, $types);

        $this->members = $members;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ProgramMembership|string
     */
    public function getMemberOf()
    {
        return $this->memberOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ProgramMembership|string $memberOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMemberOf($memberOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\ProgramMembership",
            "string",
        ];

        $memberOf = self::checkTypes($memberOf, $types);

        $this->memberOf = $memberOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    public function getHasCredential()
    {
        return $this->hasCredential;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string $hasCredential
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasCredential($hasCredential)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
            "string",
        ];

        $hasCredential = self::checkTypes($hasCredential, $types);

        $this->hasCredential = $hasCredential;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MerchantReturnPolicy|string
     */
    public function getHasMerchantReturnPolicy()
    {
        return $this->hasMerchantReturnPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MerchantReturnPolicy|string $hasMerchantReturnPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMerchantReturnPolicy($hasMerchantReturnPolicy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MerchantReturnPolicy",
            "string",
        ];

        $hasMerchantReturnPolicy = self::checkTypes($hasMerchantReturnPolicy, $types);

        $this->hasMerchantReturnPolicy = $hasMerchantReturnPolicy;
    }

    /**
     * @return string
     */
    public function getTaxID()
    {
        return $this->taxID;
    }

    /**
     * @param string $taxID
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTaxID($taxID)
    {
        $types = [
            "string",
        ];

        $taxID = self::checkTypes($taxID, $types);

        $this->taxID = $taxID;
    }

    /**
     * @return string
     */
    public function getLeiCode()
    {
        return $this->leiCode;
    }

    /**
     * @param string $leiCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLeiCode($leiCode)
    {
        $types = [
            "string",
        ];

        $leiCode = self::checkTypes($leiCode, $types);

        $this->leiCode = $leiCode;
    }

    /**
     * @return string
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * @param string $awards
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAwards($awards)
    {
        $types = [
            "string",
        ];

        $awards = self::checkTypes($awards, $types);

        $this->awards = $awards;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getSubOrganization()
    {
        return $this->subOrganization;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $subOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubOrganization($subOrganization)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $subOrganization = self::checkTypes($subOrganization, $types);

        $this->subOrganization = $subOrganization;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getUnnamedSourcesPolicy()
    {
        return $this->unnamedSourcesPolicy;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $unnamedSourcesPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnnamedSourcesPolicy($unnamedSourcesPolicy)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $unnamedSourcesPolicy = self::checkTypes($unnamedSourcesPolicy, $types);

        $this->unnamedSourcesPolicy = $unnamedSourcesPolicy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $member
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMember($member)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $member = self::checkTypes($member, $types);

        $this->member = $member;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getAlumni()
    {
        return $this->alumni;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $alumni
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlumni($alumni)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $alumni = self::checkTypes($alumni, $types);

        $this->alumni = $alumni;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AboutPage|string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getOwnershipFundingInfo()
    {
        return $this->ownershipFundingInfo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AboutPage|string|\OpenActive\Models\SchemaOrg\CreativeWork $ownershipFundingInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOwnershipFundingInfo($ownershipFundingInfo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AboutPage",
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $ownershipFundingInfo = self::checkTypes($ownershipFundingInfo, $types);

        $this->ownershipFundingInfo = $ownershipFundingInfo;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFaxNumber($faxNumber)
    {
        $types = [
            "string",
        ];

        $faxNumber = self::checkTypes($faxNumber, $types);

        $this->faxNumber = $faxNumber;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GeoShape|\OpenActive\Models\SchemaOrg\Place|string|\OpenActive\Models\SchemaOrg\AdministrativeArea $areaServed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAreaServed($areaServed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\GeoShape",
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        ];

        $areaServed = self::checkTypes($areaServed, $types);

        $this->areaServed = $areaServed;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\NonprofitType|null
     */
    public function getNonprofitStatus()
    {
        return $this->nonprofitStatus;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\NonprofitType|null $nonprofitStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNonprofitStatus($nonprofitStatus)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\NonprofitType",
            "null",
        ];

        $nonprofitStatus = self::checkTypes($nonprofitStatus, $types);

        $this->nonprofitStatus = $nonprofitStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\OwnershipInfo|\OpenActive\Models\SchemaOrg\Product|string
     */
    public function getOwns()
    {
        return $this->owns;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\OwnershipInfo|\OpenActive\Models\SchemaOrg\Product|string $owns
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOwns($owns)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\OwnershipInfo",
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $owns = self::checkTypes($owns, $types);

        $this->owns = $owns;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event|string
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event|string $events
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEvents($events)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
            "string",
        ];

        $events = self::checkTypes($events, $types);

        $this->events = $events;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getHasPOS()
    {
        return $this->hasPOS;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $hasPOS
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasPOS($hasPOS)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $hasPOS = self::checkTypes($hasPOS, $types);

        $this->hasPOS = $hasPOS;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getKnowsAbout()
    {
        return $this->knowsAbout;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing $knowsAbout
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKnowsAbout($knowsAbout)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $knowsAbout = self::checkTypes($knowsAbout, $types);

        $this->knowsAbout = $knowsAbout;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PostalAddress|string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PostalAddress|string $address
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAddress($address)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PostalAddress",
            "string",
        ];

        $address = self::checkTypes($address, $types);

        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getDuns()
    {
        return $this->duns;
    }

    /**
     * @param string $duns
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuns($duns)
    {
        $types = [
            "string",
        ];

        $duns = self::checkTypes($duns, $types);

        $this->duns = $duns;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $employees
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmployees($employees)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $employees = self::checkTypes($employees, $types);

        $this->employees = $employees;
    }

    /**
     * @return string
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * @param string $award
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAward($award)
    {
        $types = [
            "string",
        ];

        $award = self::checkTypes($award, $types);

        $this->award = $award;
    }

    /**
     * @return string
     */
    public function getGlobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    /**
     * @param string $globalLocationNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGlobalLocationNumber($globalLocationNumber)
    {
        $types = [
            "string",
        ];

        $globalLocationNumber = self::checkTypes($globalLocationNumber, $types);

        $this->globalLocationNumber = $globalLocationNumber;
    }

}
