<?php

namespace _PhpScoper21c6ce8bfe5d\Jean85;

use _PhpScoper21c6ce8bfe5d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper21c6ce8bfe5d\Jean85\Version
    {
        return new \_PhpScoper21c6ce8bfe5d\Jean85\Version($packageName, \_PhpScoper21c6ce8bfe5d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper21c6ce8bfe5d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper21c6ce8bfe5d\Jean85\Version
    {
        return self::getVersion(\_PhpScoper21c6ce8bfe5d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
