<?php

namespace _PhpScoperea337ed74749\Jean85;

use _PhpScoperea337ed74749\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperea337ed74749\Jean85\Version
    {
        return new \_PhpScoperea337ed74749\Jean85\Version($packageName, \_PhpScoperea337ed74749\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperea337ed74749\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperea337ed74749\Jean85\Version
    {
        return self::getVersion(\_PhpScoperea337ed74749\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
