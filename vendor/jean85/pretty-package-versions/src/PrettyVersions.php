<?php

namespace _PhpScopera04bf8e97c06\Jean85;

use _PhpScopera04bf8e97c06\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera04bf8e97c06\Jean85\Version
    {
        return new \_PhpScopera04bf8e97c06\Jean85\Version($packageName, \_PhpScopera04bf8e97c06\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera04bf8e97c06\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera04bf8e97c06\Jean85\Version
    {
        return self::getVersion(\_PhpScopera04bf8e97c06\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
