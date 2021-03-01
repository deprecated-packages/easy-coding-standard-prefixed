<?php

namespace _PhpScoperf3dc21757def\Jean85;

use _PhpScoperf3dc21757def\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf3dc21757def\Jean85\Version
    {
        return new \_PhpScoperf3dc21757def\Jean85\Version($packageName, \_PhpScoperf3dc21757def\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf3dc21757def\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf3dc21757def\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf3dc21757def\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
