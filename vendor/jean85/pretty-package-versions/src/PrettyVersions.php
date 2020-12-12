<?php

namespace _PhpScoper8a05d21c15c9\Jean85;

use _PhpScoper8a05d21c15c9\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper8a05d21c15c9\Jean85\Version
    {
        return new \_PhpScoper8a05d21c15c9\Jean85\Version($packageName, \_PhpScoper8a05d21c15c9\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper8a05d21c15c9\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper8a05d21c15c9\Jean85\Version
    {
        return self::getVersion(\_PhpScoper8a05d21c15c9\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
