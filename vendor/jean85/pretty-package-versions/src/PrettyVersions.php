<?php

namespace _PhpScoperfcf15c26e033\Jean85;

use _PhpScoperfcf15c26e033\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfcf15c26e033\Jean85\Version
    {
        return new \_PhpScoperfcf15c26e033\Jean85\Version($packageName, \_PhpScoperfcf15c26e033\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfcf15c26e033\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfcf15c26e033\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfcf15c26e033\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
