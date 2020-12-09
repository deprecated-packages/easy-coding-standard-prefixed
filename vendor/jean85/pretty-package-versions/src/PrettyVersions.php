<?php

namespace _PhpScoperdf15f2b748e9\Jean85;

use _PhpScoperdf15f2b748e9\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdf15f2b748e9\Jean85\Version
    {
        return new \_PhpScoperdf15f2b748e9\Jean85\Version($packageName, \_PhpScoperdf15f2b748e9\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperdf15f2b748e9\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperdf15f2b748e9\Jean85\Version
    {
        return self::getVersion(\_PhpScoperdf15f2b748e9\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
