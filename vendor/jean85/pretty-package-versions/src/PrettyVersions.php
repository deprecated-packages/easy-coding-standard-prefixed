<?php

namespace _PhpScopere205696a9dd6\Jean85;

use _PhpScopere205696a9dd6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere205696a9dd6\Jean85\Version
    {
        return new \_PhpScopere205696a9dd6\Jean85\Version($packageName, \_PhpScopere205696a9dd6\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere205696a9dd6\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere205696a9dd6\Jean85\Version
    {
        return self::getVersion(\_PhpScopere205696a9dd6\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
