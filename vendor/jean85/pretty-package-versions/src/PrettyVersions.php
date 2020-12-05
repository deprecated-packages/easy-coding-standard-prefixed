<?php

namespace _PhpScoperaba240c3d5f1\Jean85;

use _PhpScoperaba240c3d5f1\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperaba240c3d5f1\Jean85\Version
    {
        return new \_PhpScoperaba240c3d5f1\Jean85\Version($packageName, \_PhpScoperaba240c3d5f1\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperaba240c3d5f1\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperaba240c3d5f1\Jean85\Version
    {
        return self::getVersion(\_PhpScoperaba240c3d5f1\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
