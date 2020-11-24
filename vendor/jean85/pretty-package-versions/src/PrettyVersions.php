<?php

namespace _PhpScoperd675aaf00c76\Jean85;

use _PhpScoperd675aaf00c76\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd675aaf00c76\Jean85\Version
    {
        return new \_PhpScoperd675aaf00c76\Jean85\Version($packageName, \_PhpScoperd675aaf00c76\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd675aaf00c76\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd675aaf00c76\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd675aaf00c76\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
