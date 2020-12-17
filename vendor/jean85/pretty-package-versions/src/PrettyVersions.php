<?php

namespace _PhpScopercf909b66eba8\Jean85;

use _PhpScopercf909b66eba8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopercf909b66eba8\Jean85\Version
    {
        return new \_PhpScopercf909b66eba8\Jean85\Version($packageName, \_PhpScopercf909b66eba8\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopercf909b66eba8\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopercf909b66eba8\Jean85\Version
    {
        return self::getVersion(\_PhpScopercf909b66eba8\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
