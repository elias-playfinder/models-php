<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PodcastSeries extends \OpenActive\Models\SchemaOrg\CreativeWorkSeries
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PodcastSeries";
    }

    public static function fieldList() {
        $fields = [
            "webFeed" => "webFeed",
            "actor" => "actor",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DataFeed
     */
    protected $webFeed;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $actor;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DataFeed
     */
    public function getWebFeed()
    {
        return $this->webFeed;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DataFeed $webFeed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWebFeed($webFeed)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DataFeed",
        ];

        $webFeed = self::checkTypes($webFeed, $types);

        $this->webFeed = $webFeed;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $actor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

}
