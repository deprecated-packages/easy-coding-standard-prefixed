<?php

namespace _PhpScoper190659c42b56\Jean85;

use _PhpScoper190659c42b56\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper190659c42b56\Jean85\Version
    {
        return new \_PhpScoper190659c42b56\Jean85\Version($packageName, \_PhpScoper190659c42b56\PackageVersions\Versions::getVersion($packageName));
    }
}
