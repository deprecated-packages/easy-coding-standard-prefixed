<?php

namespace _PhpScoper7108c819f5c5\Jean85;

use _PhpScoper7108c819f5c5\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7108c819f5c5\Jean85\Version
    {
        return new \_PhpScoper7108c819f5c5\Jean85\Version($packageName, \_PhpScoper7108c819f5c5\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper7108c819f5c5\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper7108c819f5c5\Jean85\Version
    {
        return self::getVersion(\_PhpScoper7108c819f5c5\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
