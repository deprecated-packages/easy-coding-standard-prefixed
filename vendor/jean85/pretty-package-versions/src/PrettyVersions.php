<?php

namespace _PhpScoperd4937ee9b515\Jean85;

use _PhpScoperd4937ee9b515\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd4937ee9b515\Jean85\Version
    {
        return new \_PhpScoperd4937ee9b515\Jean85\Version($packageName, \_PhpScoperd4937ee9b515\PackageVersions\Versions::getVersion($packageName));
    }
}
