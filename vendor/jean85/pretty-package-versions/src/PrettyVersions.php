<?php

namespace _PhpScoper23ef26a4fb01\Jean85;

use _PhpScoper23ef26a4fb01\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper23ef26a4fb01\Jean85\Version
    {
        return new \_PhpScoper23ef26a4fb01\Jean85\Version($packageName, \_PhpScoper23ef26a4fb01\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper23ef26a4fb01\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper23ef26a4fb01\Jean85\Version
    {
        return self::getVersion(\_PhpScoper23ef26a4fb01\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
