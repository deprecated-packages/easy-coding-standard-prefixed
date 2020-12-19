<?php

namespace _PhpScopera8f555a7493c\Jean85;

use _PhpScopera8f555a7493c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera8f555a7493c\Jean85\Version
    {
        return new \_PhpScopera8f555a7493c\Jean85\Version($packageName, \_PhpScopera8f555a7493c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera8f555a7493c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera8f555a7493c\Jean85\Version
    {
        return self::getVersion(\_PhpScopera8f555a7493c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
