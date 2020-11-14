<?php

namespace _PhpScoper229e8121cf9f\Jean85;

use _PhpScoper229e8121cf9f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper229e8121cf9f\Jean85\Version
    {
        return new \_PhpScoper229e8121cf9f\Jean85\Version($packageName, \_PhpScoper229e8121cf9f\PackageVersions\Versions::getVersion($packageName));
    }
}
