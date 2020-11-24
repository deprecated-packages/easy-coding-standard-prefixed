<?php

namespace _PhpScoperfd70a7e8e84f\Jean85;

use _PhpScoperfd70a7e8e84f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfd70a7e8e84f\Jean85\Version
    {
        return new \_PhpScoperfd70a7e8e84f\Jean85\Version($packageName, \_PhpScoperfd70a7e8e84f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfd70a7e8e84f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfd70a7e8e84f\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfd70a7e8e84f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
