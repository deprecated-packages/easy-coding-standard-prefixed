<?php

namespace _PhpScoper06c66bea2cf6\Jean85;

use _PhpScoper06c66bea2cf6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper06c66bea2cf6\Jean85\Version
    {
        return new \_PhpScoper06c66bea2cf6\Jean85\Version($packageName, \_PhpScoper06c66bea2cf6\PackageVersions\Versions::getVersion($packageName));
    }
}
