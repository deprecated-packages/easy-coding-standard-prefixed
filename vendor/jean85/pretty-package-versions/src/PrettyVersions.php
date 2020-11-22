<?php

namespace _PhpScoper21fff473f90a\Jean85;

use _PhpScoper21fff473f90a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper21fff473f90a\Jean85\Version
    {
        return new \_PhpScoper21fff473f90a\Jean85\Version($packageName, \_PhpScoper21fff473f90a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper21fff473f90a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper21fff473f90a\Jean85\Version
    {
        return self::getVersion(\_PhpScoper21fff473f90a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
