<?php

namespace _PhpScoperbcc0395698f8\Jean85;

use _PhpScoperbcc0395698f8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperbcc0395698f8\Jean85\Version
    {
        return new \_PhpScoperbcc0395698f8\Jean85\Version($packageName, \_PhpScoperbcc0395698f8\PackageVersions\Versions::getVersion($packageName));
    }
}
