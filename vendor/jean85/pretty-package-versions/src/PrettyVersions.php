<?php

namespace _PhpScoperdc8fbcd7c69d\Jean85;

use _PhpScoperdc8fbcd7c69d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdc8fbcd7c69d\Jean85\Version
    {
        return new \_PhpScoperdc8fbcd7c69d\Jean85\Version($packageName, \_PhpScoperdc8fbcd7c69d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperdc8fbcd7c69d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperdc8fbcd7c69d\Jean85\Version
    {
        return self::getVersion(\_PhpScoperdc8fbcd7c69d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
