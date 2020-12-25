<?php

namespace _PhpScoper745103eaabcd\Jean85;

use _PhpScoper745103eaabcd\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper745103eaabcd\Jean85\Version
    {
        return new \_PhpScoper745103eaabcd\Jean85\Version($packageName, \_PhpScoper745103eaabcd\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper745103eaabcd\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper745103eaabcd\Jean85\Version
    {
        return self::getVersion(\_PhpScoper745103eaabcd\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
