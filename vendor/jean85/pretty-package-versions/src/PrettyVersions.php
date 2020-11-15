<?php

namespace _PhpScoperd9c3b46af121\Jean85;

use _PhpScoperd9c3b46af121\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd9c3b46af121\Jean85\Version
    {
        return new \_PhpScoperd9c3b46af121\Jean85\Version($packageName, \_PhpScoperd9c3b46af121\PackageVersions\Versions::getVersion($packageName));
    }
}
