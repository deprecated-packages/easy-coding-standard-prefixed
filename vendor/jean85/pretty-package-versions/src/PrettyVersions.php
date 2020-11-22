<?php

namespace _PhpScoper797695bcfb1f\Jean85;

use _PhpScoper797695bcfb1f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper797695bcfb1f\Jean85\Version
    {
        return new \_PhpScoper797695bcfb1f\Jean85\Version($packageName, \_PhpScoper797695bcfb1f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper797695bcfb1f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper797695bcfb1f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper797695bcfb1f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
