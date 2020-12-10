<?php

namespace _PhpScoper908feaf49cd8\Jean85;

use _PhpScoper908feaf49cd8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper908feaf49cd8\Jean85\Version
    {
        return new \_PhpScoper908feaf49cd8\Jean85\Version($packageName, \_PhpScoper908feaf49cd8\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper908feaf49cd8\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper908feaf49cd8\Jean85\Version
    {
        return self::getVersion(\_PhpScoper908feaf49cd8\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
