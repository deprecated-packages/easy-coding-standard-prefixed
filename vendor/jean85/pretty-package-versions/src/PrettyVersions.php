<?php

namespace _PhpScoper10b1b2c5ca55\Jean85;

use _PhpScoper10b1b2c5ca55\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper10b1b2c5ca55\Jean85\Version
    {
        return new \_PhpScoper10b1b2c5ca55\Jean85\Version($packageName, \_PhpScoper10b1b2c5ca55\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper10b1b2c5ca55\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper10b1b2c5ca55\Jean85\Version
    {
        return self::getVersion(\_PhpScoper10b1b2c5ca55\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
