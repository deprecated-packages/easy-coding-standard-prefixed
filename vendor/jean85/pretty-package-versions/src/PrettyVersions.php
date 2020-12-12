<?php

namespace _PhpScoper04022cd986ec\Jean85;

use _PhpScoper04022cd986ec\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper04022cd986ec\Jean85\Version
    {
        return new \_PhpScoper04022cd986ec\Jean85\Version($packageName, \_PhpScoper04022cd986ec\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper04022cd986ec\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper04022cd986ec\Jean85\Version
    {
        return self::getVersion(\_PhpScoper04022cd986ec\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
