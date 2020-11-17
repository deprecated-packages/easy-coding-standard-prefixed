<?php

namespace _PhpScoper2a8ad010dfbd\Jean85;

use _PhpScoper2a8ad010dfbd\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper2a8ad010dfbd\Jean85\Version
    {
        return new \_PhpScoper2a8ad010dfbd\Jean85\Version($packageName, \_PhpScoper2a8ad010dfbd\PackageVersions\Versions::getVersion($packageName));
    }
}
