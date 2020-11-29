<?php

namespace _PhpScopercae980ebf12d\Jean85;

use _PhpScopercae980ebf12d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopercae980ebf12d\Jean85\Version
    {
        return new \_PhpScopercae980ebf12d\Jean85\Version($packageName, \_PhpScopercae980ebf12d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopercae980ebf12d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopercae980ebf12d\Jean85\Version
    {
        return self::getVersion(\_PhpScopercae980ebf12d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
