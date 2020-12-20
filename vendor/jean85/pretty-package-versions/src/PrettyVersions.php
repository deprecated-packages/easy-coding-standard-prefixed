<?php

namespace _PhpScoper611f49771945\Jean85;

use _PhpScoper611f49771945\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper611f49771945\Jean85\Version
    {
        return new \_PhpScoper611f49771945\Jean85\Version($packageName, \_PhpScoper611f49771945\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper611f49771945\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper611f49771945\Jean85\Version
    {
        return self::getVersion(\_PhpScoper611f49771945\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
