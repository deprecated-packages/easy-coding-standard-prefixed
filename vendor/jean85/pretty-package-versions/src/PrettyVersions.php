<?php

namespace _PhpScopere106f9fd4493\Jean85;

use _PhpScopere106f9fd4493\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere106f9fd4493\Jean85\Version
    {
        return new \_PhpScopere106f9fd4493\Jean85\Version($packageName, \_PhpScopere106f9fd4493\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere106f9fd4493\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere106f9fd4493\Jean85\Version
    {
        return self::getVersion(\_PhpScopere106f9fd4493\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
