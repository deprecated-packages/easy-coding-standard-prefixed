<?php

namespace _PhpScoper32136251d417\Jean85;

use _PhpScoper32136251d417\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper32136251d417\Jean85\Version
    {
        return new \_PhpScoper32136251d417\Jean85\Version($packageName, \_PhpScoper32136251d417\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper32136251d417\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper32136251d417\Jean85\Version
    {
        return self::getVersion(\_PhpScoper32136251d417\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
