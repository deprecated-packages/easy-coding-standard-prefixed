<?php

namespace _PhpScopera37d6fb0b1ab\Jean85;

use _PhpScopera37d6fb0b1ab\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera37d6fb0b1ab\Jean85\Version
    {
        return new \_PhpScopera37d6fb0b1ab\Jean85\Version($packageName, \_PhpScopera37d6fb0b1ab\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera37d6fb0b1ab\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera37d6fb0b1ab\Jean85\Version
    {
        return self::getVersion(\_PhpScopera37d6fb0b1ab\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
