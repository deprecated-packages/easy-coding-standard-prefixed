<?php

namespace _PhpScopera34ae19e8d40\Jean85;

use _PhpScopera34ae19e8d40\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera34ae19e8d40\Jean85\Version
    {
        return new \_PhpScopera34ae19e8d40\Jean85\Version($packageName, \_PhpScopera34ae19e8d40\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera34ae19e8d40\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera34ae19e8d40\Jean85\Version
    {
        return self::getVersion(\_PhpScopera34ae19e8d40\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
