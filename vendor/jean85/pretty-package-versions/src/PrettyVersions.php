<?php

namespace _PhpScoperdeea1786e972\Jean85;

use _PhpScoperdeea1786e972\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdeea1786e972\Jean85\Version
    {
        return new \_PhpScoperdeea1786e972\Jean85\Version($packageName, \_PhpScoperdeea1786e972\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperdeea1786e972\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperdeea1786e972\Jean85\Version
    {
        return self::getVersion(\_PhpScoperdeea1786e972\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
