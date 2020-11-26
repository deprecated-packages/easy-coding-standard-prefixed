<?php

namespace _PhpScoper614deab2c612\Jean85;

use _PhpScoper614deab2c612\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper614deab2c612\Jean85\Version
    {
        return new \_PhpScoper614deab2c612\Jean85\Version($packageName, \_PhpScoper614deab2c612\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper614deab2c612\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper614deab2c612\Jean85\Version
    {
        return self::getVersion(\_PhpScoper614deab2c612\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
