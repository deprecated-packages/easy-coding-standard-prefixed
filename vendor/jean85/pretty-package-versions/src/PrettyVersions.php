<?php

namespace _PhpScoper64a921a5401b\Jean85;

use _PhpScoper64a921a5401b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper64a921a5401b\Jean85\Version
    {
        return new \_PhpScoper64a921a5401b\Jean85\Version($packageName, \_PhpScoper64a921a5401b\PackageVersions\Versions::getVersion($packageName));
    }
}
