<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VisualArtwork extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VisualArtwork";
    }

    public static function fieldList() {
        $fields = [
            "artworkSurface" => "artworkSurface",
            "colorist" => "colorist",
            "artform" => "artform",
            "artEdition" => "artEdition",
            "letterer" => "letterer",
            "depth" => "depth",
            "artMedium" => "artMedium",
            "artist" => "artist",
            "width" => "width",
            "height" => "height",
            "penciler" => "penciler",
            "inker" => "inker",
            "surface" => "surface",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     *
     *
     * @var string
     */
    protected $artworkSurface;

    /**
     * The individual who adds color to inked drawings.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $colorist;

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     *
     *
     * @var string
     */
    protected $artform;

    /**
     * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
     *
     *
     * @var string|int|null
     */
    protected $artEdition;

    /**
     * The individual who adds lettering, including speech balloons and sound effects, to artwork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $letterer;

    /**
     * The depth of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $depth;

    /**
     * The material used. (E.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
     *
     *
     * @var string
     */
    protected $artMedium;

    /**
     * The primary artist for a work
     *     	in a medium other than pencils or digital line art--for example, if the
     *     	primary artwork is done in watercolors or digital paints.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $artist;

    /**
     * The width of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $width;

    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance|string
     */
    protected $height;

    /**
     * The individual who draws the primary narrative artwork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $penciler;

    /**
     * The individual who traces over the pencil drawings in ink after pencils are complete.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $inker;

    /**
     * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood, Board, etc.
     *
     *
     * @var string
     */
    protected $surface;

    /**
     * @return string
     */
    public function getArtworkSurface()
    {
        return $this->artworkSurface;
    }

    /**
     * @param string $artworkSurface
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArtworkSurface($artworkSurface)
    {
        $types = [
            "string",
        ];

        $artworkSurface = self::checkTypes($artworkSurface, $types);

        $this->artworkSurface = $artworkSurface;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getColorist()
    {
        return $this->colorist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $colorist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setColorist($colorist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $colorist = self::checkTypes($colorist, $types);

        $this->colorist = $colorist;
    }

    /**
     * @return string
     */
    public function getArtform()
    {
        return $this->artform;
    }

    /**
     * @param string $artform
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArtform($artform)
    {
        $types = [
            "string",
        ];

        $artform = self::checkTypes($artform, $types);

        $this->artform = $artform;
    }

    /**
     * @return string|int|null
     */
    public function getArtEdition()
    {
        return $this->artEdition;
    }

    /**
     * @param string|int|null $artEdition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArtEdition($artEdition)
    {
        $types = [
            "string",
            "int",
            "null",
        ];

        $artEdition = self::checkTypes($artEdition, $types);

        $this->artEdition = $artEdition;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getLetterer()
    {
        return $this->letterer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $letterer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLetterer($letterer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $letterer = self::checkTypes($letterer, $types);

        $this->letterer = $letterer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $depth
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepth($depth)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $depth = self::checkTypes($depth, $types);

        $this->depth = $depth;
    }

    /**
     * @return string
     */
    public function getArtMedium()
    {
        return $this->artMedium;
    }

    /**
     * @param string $artMedium
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArtMedium($artMedium)
    {
        $types = [
            "string",
        ];

        $artMedium = self::checkTypes($artMedium, $types);

        $this->artMedium = $artMedium;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $artist
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setArtist($artist)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $artist = self::checkTypes($artist, $types);

        $this->artist = $artist;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $width
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWidth($width)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $width = self::checkTypes($width, $types);

        $this->width = $width;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance|string $height
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\Distance",
            "string",
        ];

        $height = self::checkTypes($height, $types);

        $this->height = $height;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getPenciler()
    {
        return $this->penciler;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $penciler
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPenciler($penciler)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $penciler = self::checkTypes($penciler, $types);

        $this->penciler = $penciler;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getInker()
    {
        return $this->inker;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $inker
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInker($inker)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $inker = self::checkTypes($inker, $types);

        $this->inker = $inker;
    }

    /**
     * @return string
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @param string $surface
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSurface($surface)
    {
        $types = [
            "string",
        ];

        $surface = self::checkTypes($surface, $types);

        $this->surface = $surface;
    }

}
