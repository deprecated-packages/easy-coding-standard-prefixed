<?php

namespace _PhpScoperfab1bfb7ec99\Jean85;

use _PhpScoperfab1bfb7ec99\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfab1bfb7ec99\Jean85\Version
    {
        return new \_PhpScoperfab1bfb7ec99\Jean85\Version($packageName, \_PhpScoperfab1bfb7ec99\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfab1bfb7ec99\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfab1bfb7ec99\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfab1bfb7ec99\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
