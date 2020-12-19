<?php

namespace _PhpScoper13160cf3462c\Jean85;

use _PhpScoper13160cf3462c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper13160cf3462c\Jean85\Version
    {
        return new \_PhpScoper13160cf3462c\Jean85\Version($packageName, \_PhpScoper13160cf3462c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper13160cf3462c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper13160cf3462c\Jean85\Version
    {
        return self::getVersion(\_PhpScoper13160cf3462c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
