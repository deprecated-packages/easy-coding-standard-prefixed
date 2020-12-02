<?php

namespace _PhpScopera23ebff5477f\Jean85;

use _PhpScopera23ebff5477f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera23ebff5477f\Jean85\Version
    {
        return new \_PhpScopera23ebff5477f\Jean85\Version($packageName, \_PhpScopera23ebff5477f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera23ebff5477f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera23ebff5477f\Jean85\Version
    {
        return self::getVersion(\_PhpScopera23ebff5477f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
