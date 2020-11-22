<?php

namespace _PhpScopera88a8b9f064a\Jean85;

use _PhpScopera88a8b9f064a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera88a8b9f064a\Jean85\Version
    {
        return new \_PhpScopera88a8b9f064a\Jean85\Version($packageName, \_PhpScopera88a8b9f064a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera88a8b9f064a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera88a8b9f064a\Jean85\Version
    {
        return self::getVersion(\_PhpScopera88a8b9f064a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
