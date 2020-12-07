<?php

namespace _PhpScoperfa521053d812\Jean85;

use _PhpScoperfa521053d812\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfa521053d812\Jean85\Version
    {
        return new \_PhpScoperfa521053d812\Jean85\Version($packageName, \_PhpScoperfa521053d812\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfa521053d812\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfa521053d812\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfa521053d812\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
