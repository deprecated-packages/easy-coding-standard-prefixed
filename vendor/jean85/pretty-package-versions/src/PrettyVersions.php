<?php

namespace _PhpScoperfcce67077a55\Jean85;

use _PhpScoperfcce67077a55\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfcce67077a55\Jean85\Version
    {
        return new \_PhpScoperfcce67077a55\Jean85\Version($packageName, \_PhpScoperfcce67077a55\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfcce67077a55\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfcce67077a55\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfcce67077a55\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
