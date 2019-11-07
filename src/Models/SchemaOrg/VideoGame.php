<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VideoGame extends \OpenActive\Models\SchemaOrg\Game
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VideoGame";
    }

    /**
     * Links to tips, tactics, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $gameTip;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $actors;

    /**
     * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $gamePlatform;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $director;

    /**
     * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
     *
     *
     * @var \OpenActive\Enums\GamePlayMode|null
     */
    protected $playMode;

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $directors;

    /**
     * The composer of the soundtrack.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicGroup|Person
     */
    protected $musicBy;

    /**
     * The server on which  it is possible to play the game.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\GameServer
     */
    protected $gameServer;

    /**
     * Cheat codes to the game.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $cheatCode;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoObject
     */
    protected $trailer;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var Person
     */
    protected $actor;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getGameTip()
    {
        return $this->gameTip;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $gameTip
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameTip($gameTip)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $gameTip = self::checkTypes($gameTip, $types);

        $this->gameTip = $gameTip;
    }

    /**
     * @return Person
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param Person $actors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActors($actors)
    {
        $types = array(
            "Person",
        );

        $actors = self::checkTypes($actors, $types);

        $this->actors = $actors;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getGamePlatform()
    {
        return $this->gamePlatform;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Thing $gamePlatform
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGamePlatform($gamePlatform)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $gamePlatform = self::checkTypes($gamePlatform, $types);

        $this->gamePlatform = $gamePlatform;
    }

    /**
     * @return Person
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param Person $director
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirector($director)
    {
        $types = array(
            "Person",
        );

        $director = self::checkTypes($director, $types);

        $this->director = $director;
    }

    /**
     * @return \OpenActive\Enums\GamePlayMode|null
     */
    public function getPlayMode()
    {
        return $this->playMode;
    }

    /**
     * @param \OpenActive\Enums\GamePlayMode|null $playMode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPlayMode($playMode)
    {
        $types = array(
            "\OpenActive\Enums\GamePlayMode",
            "null",
        );

        $playMode = self::checkTypes($playMode, $types);

        $this->playMode = $playMode;
    }

    /**
     * @return Person
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param Person $directors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirectors($directors)
    {
        $types = array(
            "Person",
        );

        $directors = self::checkTypes($directors, $types);

        $this->directors = $directors;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicGroup|Person
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicGroup|Person $musicBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicBy($musicBy)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicGroup",
            "Person",
        );

        $musicBy = self::checkTypes($musicBy, $types);

        $this->musicBy = $musicBy;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\GameServer
     */
    public function getGameServer()
    {
        return $this->gameServer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\GameServer $gameServer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGameServer($gameServer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\GameServer",
        );

        $gameServer = self::checkTypes($gameServer, $types);

        $this->gameServer = $gameServer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getCheatCode()
    {
        return $this->cheatCode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $cheatCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCheatCode($cheatCode)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $cheatCode = self::checkTypes($cheatCode, $types);

        $this->cheatCode = $cheatCode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\VideoObject
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoObject $trailer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrailer($trailer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\VideoObject",
        );

        $trailer = self::checkTypes($trailer, $types);

        $this->trailer = $trailer;
    }

    /**
     * @return Person
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param Person $actor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = array(
            "Person",
        );

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

}
