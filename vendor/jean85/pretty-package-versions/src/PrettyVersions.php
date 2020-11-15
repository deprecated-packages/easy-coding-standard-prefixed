<?php

namespace _PhpScopercb576ca159b5\Jean85;

use _PhpScopercb576ca159b5\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopercb576ca159b5\Jean85\Version
    {
        return new \_PhpScopercb576ca159b5\Jean85\Version($packageName, \_PhpScopercb576ca159b5\PackageVersions\Versions::getVersion($packageName));
    }
}
