<?php

namespace _PhpScopera238de2e9b5a\Jean85;

use _PhpScopera238de2e9b5a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera238de2e9b5a\Jean85\Version
    {
        return new \_PhpScopera238de2e9b5a\Jean85\Version($packageName, \_PhpScopera238de2e9b5a\PackageVersions\Versions::getVersion($packageName));
    }
}
