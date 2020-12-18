<?php

namespace _PhpScoperd8b12759ee0d\Jean85;

use _PhpScoperd8b12759ee0d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd8b12759ee0d\Jean85\Version
    {
        return new \_PhpScoperd8b12759ee0d\Jean85\Version($packageName, \_PhpScoperd8b12759ee0d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd8b12759ee0d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd8b12759ee0d\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd8b12759ee0d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
