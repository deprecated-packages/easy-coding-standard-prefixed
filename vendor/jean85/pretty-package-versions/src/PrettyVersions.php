<?php

namespace _PhpScoper629192f0909b\Jean85;

use _PhpScoper629192f0909b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper629192f0909b\Jean85\Version
    {
        return new \_PhpScoper629192f0909b\Jean85\Version($packageName, \_PhpScoper629192f0909b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper629192f0909b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper629192f0909b\Jean85\Version
    {
        return self::getVersion(\_PhpScoper629192f0909b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
