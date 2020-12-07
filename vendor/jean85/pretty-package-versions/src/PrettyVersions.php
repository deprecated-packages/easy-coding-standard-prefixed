<?php

namespace _PhpScoper18bd934c069f\Jean85;

use _PhpScoper18bd934c069f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper18bd934c069f\Jean85\Version
    {
        return new \_PhpScoper18bd934c069f\Jean85\Version($packageName, \_PhpScoper18bd934c069f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper18bd934c069f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper18bd934c069f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper18bd934c069f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
