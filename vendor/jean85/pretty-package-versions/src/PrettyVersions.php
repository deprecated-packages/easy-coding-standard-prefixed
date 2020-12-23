<?php

namespace _PhpScoper14cb6de5473d\Jean85;

use _PhpScoper14cb6de5473d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper14cb6de5473d\Jean85\Version
    {
        return new \_PhpScoper14cb6de5473d\Jean85\Version($packageName, \_PhpScoper14cb6de5473d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper14cb6de5473d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper14cb6de5473d\Jean85\Version
    {
        return self::getVersion(\_PhpScoper14cb6de5473d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
