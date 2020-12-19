<?php

namespace _PhpScoperfb2c402b972b\Jean85;

use _PhpScoperfb2c402b972b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfb2c402b972b\Jean85\Version
    {
        return new \_PhpScoperfb2c402b972b\Jean85\Version($packageName, \_PhpScoperfb2c402b972b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfb2c402b972b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfb2c402b972b\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfb2c402b972b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
