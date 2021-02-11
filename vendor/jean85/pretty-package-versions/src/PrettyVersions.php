<?php

namespace _PhpScoperef5048aa2573\Jean85;

use _PhpScoperef5048aa2573\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperef5048aa2573\Jean85\Version
    {
        return new \_PhpScoperef5048aa2573\Jean85\Version($packageName, \_PhpScoperef5048aa2573\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperef5048aa2573\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperef5048aa2573\Jean85\Version
    {
        return self::getVersion(\_PhpScoperef5048aa2573\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
