<?php

namespace _PhpScoperfa7254c25e18\Jean85;

use _PhpScoperfa7254c25e18\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfa7254c25e18\Jean85\Version
    {
        return new \_PhpScoperfa7254c25e18\Jean85\Version($packageName, \_PhpScoperfa7254c25e18\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfa7254c25e18\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfa7254c25e18\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfa7254c25e18\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
