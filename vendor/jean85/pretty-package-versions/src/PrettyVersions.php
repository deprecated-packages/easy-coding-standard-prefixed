<?php

namespace _PhpScopera6f918786d5c\Jean85;

use _PhpScopera6f918786d5c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera6f918786d5c\Jean85\Version
    {
        return new \_PhpScopera6f918786d5c\Jean85\Version($packageName, \_PhpScopera6f918786d5c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera6f918786d5c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera6f918786d5c\Jean85\Version
    {
        return self::getVersion(\_PhpScopera6f918786d5c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
