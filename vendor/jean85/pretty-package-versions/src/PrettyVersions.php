<?php

namespace _PhpScoper8e2d8a2760d1\Jean85;

use _PhpScoper8e2d8a2760d1\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper8e2d8a2760d1\Jean85\Version
    {
        return new \_PhpScoper8e2d8a2760d1\Jean85\Version($packageName, \_PhpScoper8e2d8a2760d1\PackageVersions\Versions::getVersion($packageName));
    }
}
