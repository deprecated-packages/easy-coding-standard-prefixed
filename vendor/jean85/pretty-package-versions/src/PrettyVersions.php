<?php

namespace _PhpScoperbaf90856897c\Jean85;

use _PhpScoperbaf90856897c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperbaf90856897c\Jean85\Version
    {
        return new \_PhpScoperbaf90856897c\Jean85\Version($packageName, \_PhpScoperbaf90856897c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperbaf90856897c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperbaf90856897c\Jean85\Version
    {
        return self::getVersion(\_PhpScoperbaf90856897c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
