<?php

namespace _PhpScoperf361a7d70552\Jean85;

use _PhpScoperf361a7d70552\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf361a7d70552\Jean85\Version
    {
        return new \_PhpScoperf361a7d70552\Jean85\Version($packageName, \_PhpScoperf361a7d70552\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf361a7d70552\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf361a7d70552\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf361a7d70552\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
