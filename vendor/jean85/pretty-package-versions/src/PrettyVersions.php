<?php

namespace _PhpScoper75713bc3e278\Jean85;

use _PhpScoper75713bc3e278\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper75713bc3e278\Jean85\Version
    {
        return new \_PhpScoper75713bc3e278\Jean85\Version($packageName, \_PhpScoper75713bc3e278\PackageVersions\Versions::getVersion($packageName));
    }
}
