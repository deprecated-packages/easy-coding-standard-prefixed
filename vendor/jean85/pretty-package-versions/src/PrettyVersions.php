<?php

namespace _PhpScoper47644ab3aa9a\Jean85;

use _PhpScoper47644ab3aa9a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper47644ab3aa9a\Jean85\Version
    {
        return new \_PhpScoper47644ab3aa9a\Jean85\Version($packageName, \_PhpScoper47644ab3aa9a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper47644ab3aa9a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper47644ab3aa9a\Jean85\Version
    {
        return self::getVersion(\_PhpScoper47644ab3aa9a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
