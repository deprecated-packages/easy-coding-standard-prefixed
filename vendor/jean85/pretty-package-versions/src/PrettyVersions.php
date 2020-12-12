<?php

namespace _PhpScoper83b3b9a317c0\Jean85;

use _PhpScoper83b3b9a317c0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper83b3b9a317c0\Jean85\Version
    {
        return new \_PhpScoper83b3b9a317c0\Jean85\Version($packageName, \_PhpScoper83b3b9a317c0\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper83b3b9a317c0\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper83b3b9a317c0\Jean85\Version
    {
        return self::getVersion(\_PhpScoper83b3b9a317c0\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
