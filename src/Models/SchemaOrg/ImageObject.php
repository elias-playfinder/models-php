<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ImageObject extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ImageObject";
    }

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="https://schema.org/encodingFormat">encodingFormat</a>.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $caption;

    /**
     * Thumbnail image for an image or video.
     *
     *
     * @var ImageObject
     */
    protected $thumbnail;

    /**
     * Indicates whether this image is representative of the content of the page.
     *
     *
     * @var bool|null
     */
    protected $representativeOfPage;

    /**
     * exif data for this object.
     *
     *
     * @var string|PropertyValue
     */
    protected $exifData;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MediaObject $caption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCaption($caption)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $caption = self::checkTypes($caption, $types);

        $this->caption = $caption;
    }

    /**
     * @return ImageObject
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param ImageObject $thumbnail
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setThumbnail($thumbnail)
    {
        $types = array(
            "ImageObject",
        );

        $thumbnail = self::checkTypes($thumbnail, $types);

        $this->thumbnail = $thumbnail;
    }

    /**
     * @return bool|null
     */
    public function getRepresentativeOfPage()
    {
        return $this->representativeOfPage;
    }

    /**
     * @param bool|null $representativeOfPage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRepresentativeOfPage($representativeOfPage)
    {
        $types = array(
            "bool",
            "null",
        );

        $representativeOfPage = self::checkTypes($representativeOfPage, $types);

        $this->representativeOfPage = $representativeOfPage;
    }

    /**
     * @return string|PropertyValue
     */
    public function getExifData()
    {
        return $this->exifData;
    }

    /**
     * @param string|PropertyValue $exifData
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExifData($exifData)
    {
        $types = array(
            "string",
            "PropertyValue",
        );

        $exifData = self::checkTypes($exifData, $types);

        $this->exifData = $exifData;
    }

}
