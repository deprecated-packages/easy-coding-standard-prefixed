<?php

namespace _PhpScoper065e4ba46e6d\Jean85;

use _PhpScoper065e4ba46e6d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper065e4ba46e6d\Jean85\Version
    {
        return new \_PhpScoper065e4ba46e6d\Jean85\Version($packageName, \_PhpScoper065e4ba46e6d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper065e4ba46e6d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper065e4ba46e6d\Jean85\Version
    {
        return self::getVersion(\_PhpScoper065e4ba46e6d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
