<?php

namespace _PhpScopercf327c47dfc5\Jean85;

use _PhpScopercf327c47dfc5\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopercf327c47dfc5\Jean85\Version
    {
        return new \_PhpScopercf327c47dfc5\Jean85\Version($packageName, \_PhpScopercf327c47dfc5\PackageVersions\Versions::getVersion($packageName));
    }
}
