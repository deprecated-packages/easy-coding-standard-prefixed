<?php

namespace _PhpScoper2f75f00bf6fa\Jean85;

use _PhpScoper2f75f00bf6fa\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper2f75f00bf6fa\Jean85\Version
    {
        return new \_PhpScoper2f75f00bf6fa\Jean85\Version($packageName, \_PhpScoper2f75f00bf6fa\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper2f75f00bf6fa\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper2f75f00bf6fa\Jean85\Version
    {
        return self::getVersion(\_PhpScoper2f75f00bf6fa\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
