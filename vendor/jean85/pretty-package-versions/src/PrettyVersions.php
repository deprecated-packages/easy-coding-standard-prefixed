<?php

namespace _PhpScoper87c77ad5700d\Jean85;

use _PhpScoper87c77ad5700d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper87c77ad5700d\Jean85\Version
    {
        return new \_PhpScoper87c77ad5700d\Jean85\Version($packageName, \_PhpScoper87c77ad5700d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper87c77ad5700d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper87c77ad5700d\Jean85\Version
    {
        return self::getVersion(\_PhpScoper87c77ad5700d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
