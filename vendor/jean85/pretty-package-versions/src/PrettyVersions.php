<?php

namespace _PhpScoperfcee700af3df\Jean85;

use _PhpScoperfcee700af3df\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfcee700af3df\Jean85\Version
    {
        return new \_PhpScoperfcee700af3df\Jean85\Version($packageName, \_PhpScoperfcee700af3df\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfcee700af3df\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfcee700af3df\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfcee700af3df\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
