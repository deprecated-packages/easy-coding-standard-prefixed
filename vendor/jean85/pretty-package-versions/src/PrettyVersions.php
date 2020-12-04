<?php

namespace _PhpScopera4fc793dae73\Jean85;

use _PhpScopera4fc793dae73\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera4fc793dae73\Jean85\Version
    {
        return new \_PhpScopera4fc793dae73\Jean85\Version($packageName, \_PhpScopera4fc793dae73\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera4fc793dae73\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera4fc793dae73\Jean85\Version
    {
        return self::getVersion(\_PhpScopera4fc793dae73\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
