<?php

namespace _PhpScoper02b5d1bf8fec\Jean85;

use _PhpScoper02b5d1bf8fec\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper02b5d1bf8fec\Jean85\Version
    {
        return new \_PhpScoper02b5d1bf8fec\Jean85\Version($packageName, \_PhpScoper02b5d1bf8fec\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper02b5d1bf8fec\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper02b5d1bf8fec\Jean85\Version
    {
        return self::getVersion(\_PhpScoper02b5d1bf8fec\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
