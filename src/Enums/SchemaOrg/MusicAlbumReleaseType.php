<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * The kind of release which this album is: single, EP or album.
 *
 */
class MusicAlbumReleaseType
{
    const SingleRelease = \OpenActive\Enums\SchemaOrg\MusicAlbumReleaseType\SingleRelease::class;
    const BroadcastRelease = \OpenActive\Enums\SchemaOrg\MusicAlbumReleaseType\BroadcastRelease::class;
    const AlbumRelease = \OpenActive\Enums\SchemaOrg\MusicAlbumReleaseType\AlbumRelease::class;
    const EPRelease = \OpenActive\Enums\SchemaOrg\MusicAlbumReleaseType\EPRelease::class;
}
