<?php

namespace _PhpScoper246d7c16d32f\Jean85;

use _PhpScoper246d7c16d32f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper246d7c16d32f\Jean85\Version
    {
        return new \_PhpScoper246d7c16d32f\Jean85\Version($packageName, \_PhpScoper246d7c16d32f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper246d7c16d32f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper246d7c16d32f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper246d7c16d32f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
