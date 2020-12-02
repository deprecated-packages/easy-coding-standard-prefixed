<?php

namespace _PhpScoper992f4af8b9e0\Jean85;

use _PhpScoper992f4af8b9e0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper992f4af8b9e0\Jean85\Version
    {
        return new \_PhpScoper992f4af8b9e0\Jean85\Version($packageName, \_PhpScoper992f4af8b9e0\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper992f4af8b9e0\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper992f4af8b9e0\Jean85\Version
    {
        return self::getVersion(\_PhpScoper992f4af8b9e0\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
