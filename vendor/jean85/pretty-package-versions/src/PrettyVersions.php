<?php

namespace _PhpScoperd9fcac9e904f\Jean85;

use _PhpScoperd9fcac9e904f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd9fcac9e904f\Jean85\Version
    {
        return new \_PhpScoperd9fcac9e904f\Jean85\Version($packageName, \_PhpScoperd9fcac9e904f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd9fcac9e904f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd9fcac9e904f\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd9fcac9e904f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
