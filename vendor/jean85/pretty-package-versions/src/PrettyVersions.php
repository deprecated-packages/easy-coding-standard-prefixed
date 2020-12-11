<?php

namespace _PhpScopera061b8a47e36\Jean85;

use _PhpScopera061b8a47e36\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera061b8a47e36\Jean85\Version
    {
        return new \_PhpScopera061b8a47e36\Jean85\Version($packageName, \_PhpScopera061b8a47e36\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera061b8a47e36\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera061b8a47e36\Jean85\Version
    {
        return self::getVersion(\_PhpScopera061b8a47e36\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
