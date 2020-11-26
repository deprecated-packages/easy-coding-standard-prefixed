<?php

namespace _PhpScopercb217fd4e736\Jean85;

use _PhpScopercb217fd4e736\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopercb217fd4e736\Jean85\Version
    {
        return new \_PhpScopercb217fd4e736\Jean85\Version($packageName, \_PhpScopercb217fd4e736\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopercb217fd4e736\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopercb217fd4e736\Jean85\Version
    {
        return self::getVersion(\_PhpScopercb217fd4e736\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
