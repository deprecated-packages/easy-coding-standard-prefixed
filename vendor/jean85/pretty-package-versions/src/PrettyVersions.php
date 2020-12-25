<?php

namespace _PhpScoper069ebd53a518\Jean85;

use _PhpScoper069ebd53a518\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper069ebd53a518\Jean85\Version
    {
        return new \_PhpScoper069ebd53a518\Jean85\Version($packageName, \_PhpScoper069ebd53a518\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper069ebd53a518\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper069ebd53a518\Jean85\Version
    {
        return self::getVersion(\_PhpScoper069ebd53a518\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
