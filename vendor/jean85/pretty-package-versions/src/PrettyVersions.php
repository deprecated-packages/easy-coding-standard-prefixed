<?php

namespace _PhpScoper66292c14b658\Jean85;

use _PhpScoper66292c14b658\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper66292c14b658\Jean85\Version
    {
        return new \_PhpScoper66292c14b658\Jean85\Version($packageName, \_PhpScoper66292c14b658\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper66292c14b658\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper66292c14b658\Jean85\Version
    {
        return self::getVersion(\_PhpScoper66292c14b658\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
