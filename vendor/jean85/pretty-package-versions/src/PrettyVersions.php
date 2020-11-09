<?php

namespace _PhpScoperf5f75c22067b\Jean85;

use _PhpScoperf5f75c22067b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf5f75c22067b\Jean85\Version
    {
        return new \_PhpScoperf5f75c22067b\Jean85\Version($packageName, \_PhpScoperf5f75c22067b\PackageVersions\Versions::getVersion($packageName));
    }
}
