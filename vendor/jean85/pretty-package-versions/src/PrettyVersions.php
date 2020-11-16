<?php

namespace _PhpScoperdf6a0b341030\Jean85;

use _PhpScoperdf6a0b341030\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdf6a0b341030\Jean85\Version
    {
        return new \_PhpScoperdf6a0b341030\Jean85\Version($packageName, \_PhpScoperdf6a0b341030\PackageVersions\Versions::getVersion($packageName));
    }
}
