<?php

namespace _PhpScoper9d73a84b09ad\Jean85;

use _PhpScoper9d73a84b09ad\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper9d73a84b09ad\Jean85\Version
    {
        return new \_PhpScoper9d73a84b09ad\Jean85\Version($packageName, \_PhpScoper9d73a84b09ad\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper9d73a84b09ad\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper9d73a84b09ad\Jean85\Version
    {
        return self::getVersion(\_PhpScoper9d73a84b09ad\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
