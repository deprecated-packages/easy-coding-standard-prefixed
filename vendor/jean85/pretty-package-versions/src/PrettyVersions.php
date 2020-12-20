<?php

namespace _PhpScopera51a90153f58\Jean85;

use _PhpScopera51a90153f58\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera51a90153f58\Jean85\Version
    {
        return new \_PhpScopera51a90153f58\Jean85\Version($packageName, \_PhpScopera51a90153f58\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera51a90153f58\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera51a90153f58\Jean85\Version
    {
        return self::getVersion(\_PhpScopera51a90153f58\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
