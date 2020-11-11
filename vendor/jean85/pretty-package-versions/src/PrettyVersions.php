<?php

namespace _PhpScoper0f5cd390c37a\Jean85;

use _PhpScoper0f5cd390c37a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper0f5cd390c37a\Jean85\Version
    {
        return new \_PhpScoper0f5cd390c37a\Jean85\Version($packageName, \_PhpScoper0f5cd390c37a\PackageVersions\Versions::getVersion($packageName));
    }
}
