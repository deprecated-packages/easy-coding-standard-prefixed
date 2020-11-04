<?php

namespace _PhpScoper48b5ec5b60cf\Jean85;

use _PhpScoper48b5ec5b60cf\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper48b5ec5b60cf\Jean85\Version
    {
        return new \_PhpScoper48b5ec5b60cf\Jean85\Version($packageName, \_PhpScoper48b5ec5b60cf\PackageVersions\Versions::getVersion($packageName));
    }
}
