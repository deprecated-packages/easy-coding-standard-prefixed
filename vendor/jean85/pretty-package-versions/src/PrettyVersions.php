<?php

namespace _PhpScoper2637e9a72c68\Jean85;

use _PhpScoper2637e9a72c68\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper2637e9a72c68\Jean85\Version
    {
        return new \_PhpScoper2637e9a72c68\Jean85\Version($packageName, \_PhpScoper2637e9a72c68\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper2637e9a72c68\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper2637e9a72c68\Jean85\Version
    {
        return self::getVersion(\_PhpScoper2637e9a72c68\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
