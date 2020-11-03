<?php

namespace _PhpScoper133be48300f9\Jean85;

use _PhpScoper133be48300f9\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper133be48300f9\Jean85\Version
    {
        return new \_PhpScoper133be48300f9\Jean85\Version($packageName, \_PhpScoper133be48300f9\PackageVersions\Versions::getVersion($packageName));
    }
}
