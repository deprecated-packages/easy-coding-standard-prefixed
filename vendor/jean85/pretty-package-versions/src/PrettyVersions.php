<?php

namespace _PhpScoper7faa8deb0d3c\Jean85;

use _PhpScoper7faa8deb0d3c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7faa8deb0d3c\Jean85\Version
    {
        return new \_PhpScoper7faa8deb0d3c\Jean85\Version($packageName, \_PhpScoper7faa8deb0d3c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper7faa8deb0d3c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper7faa8deb0d3c\Jean85\Version
    {
        return self::getVersion(\_PhpScoper7faa8deb0d3c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
