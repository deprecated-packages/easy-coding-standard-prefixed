<?php

namespace _PhpScopere5e7dca8c031\Jean85;

use _PhpScopere5e7dca8c031\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere5e7dca8c031\Jean85\Version
    {
        return new \_PhpScopere5e7dca8c031\Jean85\Version($packageName, \_PhpScopere5e7dca8c031\PackageVersions\Versions::getVersion($packageName));
    }
}
