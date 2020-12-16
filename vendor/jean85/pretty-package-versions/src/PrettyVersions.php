<?php

namespace _PhpScoperd35c27cd4b09\Jean85;

use _PhpScoperd35c27cd4b09\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd35c27cd4b09\Jean85\Version
    {
        return new \_PhpScoperd35c27cd4b09\Jean85\Version($packageName, \_PhpScoperd35c27cd4b09\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd35c27cd4b09\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd35c27cd4b09\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd35c27cd4b09\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
