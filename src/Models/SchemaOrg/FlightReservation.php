<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FlightReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FlightReservation";
    }

    /**
     * The airline-specific indicator of boarding order / preference.
     *
     *
     * @var string
     */
    protected $boardingGroup;

    /**
     * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
     *
     *
     * @var \OpenActive\Enums\QualitativeValue|string|null
     */
    protected $passengerPriorityStatus;

    /**
     * The type of security screening the passenger is subject to.
     *
     *
     * @var string
     */
    protected $securityScreening;

    /**
     * The passenger's sequence number as assigned by the airline.
     *
     *
     * @var string
     */
    protected $passengerSequenceNumber;

    /**
     * @return string
     */
    public function getBoardingGroup()
    {
        return $this->boardingGroup;
    }

    /**
     * @param string $boardingGroup
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBoardingGroup($boardingGroup)
    {
        $types = array(
            "string",
        );

        $boardingGroup = self::checkTypes($boardingGroup, $types);

        $this->boardingGroup = $boardingGroup;
    }

    /**
     * @return \OpenActive\Enums\QualitativeValue|string|null
     */
    public function getPassengerPriorityStatus()
    {
        return $this->passengerPriorityStatus;
    }

    /**
     * @param \OpenActive\Enums\QualitativeValue|string|null $passengerPriorityStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPassengerPriorityStatus($passengerPriorityStatus)
    {
        $types = array(
            "\OpenActive\Enums\QualitativeValue",
            "string",
            "null",
        );

        $passengerPriorityStatus = self::checkTypes($passengerPriorityStatus, $types);

        $this->passengerPriorityStatus = $passengerPriorityStatus;
    }

    /**
     * @return string
     */
    public function getSecurityScreening()
    {
        return $this->securityScreening;
    }

    /**
     * @param string $securityScreening
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSecurityScreening($securityScreening)
    {
        $types = array(
            "string",
        );

        $securityScreening = self::checkTypes($securityScreening, $types);

        $this->securityScreening = $securityScreening;
    }

    /**
     * @return string
     */
    public function getPassengerSequenceNumber()
    {
        return $this->passengerSequenceNumber;
    }

    /**
     * @param string $passengerSequenceNumber
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPassengerSequenceNumber($passengerSequenceNumber)
    {
        $types = array(
            "string",
        );

        $passengerSequenceNumber = self::checkTypes($passengerSequenceNumber, $types);

        $this->passengerSequenceNumber = $passengerSequenceNumber;
    }

}
