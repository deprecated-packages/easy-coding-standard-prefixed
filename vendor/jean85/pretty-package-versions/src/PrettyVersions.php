<?php

namespace _PhpScoper80dbed43490f\Jean85;

use _PhpScoper80dbed43490f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper80dbed43490f\Jean85\Version
    {
        return new \_PhpScoper80dbed43490f\Jean85\Version($packageName, \_PhpScoper80dbed43490f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper80dbed43490f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper80dbed43490f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper80dbed43490f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
