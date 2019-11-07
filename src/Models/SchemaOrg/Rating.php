<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Rating extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Rating";
    }

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     *
     * @var string
     */
    protected $reviewAspect;

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     *
     *
     * @var string|float|null
     */
    protected $worstRating;

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     *
     * @var Person|Organization
     */
    protected $author;

    /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
     *
     *
     * @var string|float|null
     */
    protected $bestRating;

    /**
     * The rating for the content.<br/><br/>
     * 
     * Usage guidelines:<br/><br/>
     * 
     * <ul>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * </ul>
     * 
     *
     *
     * @var string|float|null
     */
    protected $ratingValue;

    /**
     * @return string
     */
    public function getReviewAspect()
    {
        return $this->reviewAspect;
    }

    /**
     * @param string $reviewAspect
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviewAspect($reviewAspect)
    {
        $types = array(
            "string",
        );

        $reviewAspect = self::checkTypes($reviewAspect, $types);

        $this->reviewAspect = $reviewAspect;
    }

    /**
     * @return string|float|null
     */
    public function getWorstRating()
    {
        return $this->worstRating;
    }

    /**
     * @param string|float|null $worstRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorstRating($worstRating)
    {
        $types = array(
            "string",
            "float",
            "null",
        );

        $worstRating = self::checkTypes($worstRating, $types);

        $this->worstRating = $worstRating;
    }

    /**
     * @return Person|Organization
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param Person|Organization $author
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthor($author)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $author = self::checkTypes($author, $types);

        $this->author = $author;
    }

    /**
     * @return string|float|null
     */
    public function getBestRating()
    {
        return $this->bestRating;
    }

    /**
     * @param string|float|null $bestRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBestRating($bestRating)
    {
        $types = array(
            "string",
            "float",
            "null",
        );

        $bestRating = self::checkTypes($bestRating, $types);

        $this->bestRating = $bestRating;
    }

    /**
     * @return string|float|null
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * @param string|float|null $ratingValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRatingValue($ratingValue)
    {
        $types = array(
            "string",
            "float",
            "null",
        );

        $ratingValue = self::checkTypes($ratingValue, $types);

        $this->ratingValue = $ratingValue;
    }

}
