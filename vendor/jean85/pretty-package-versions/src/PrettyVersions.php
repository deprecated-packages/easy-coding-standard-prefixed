<?php

namespace _PhpScoper807f8e74693b\Jean85;

use _PhpScoper807f8e74693b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper807f8e74693b\Jean85\Version
    {
        return new \_PhpScoper807f8e74693b\Jean85\Version($packageName, \_PhpScoper807f8e74693b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper807f8e74693b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper807f8e74693b\Jean85\Version
    {
        return self::getVersion(\_PhpScoper807f8e74693b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
