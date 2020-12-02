<?php

namespace _PhpScoperf62d28230928\Jean85;

use _PhpScoperf62d28230928\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf62d28230928\Jean85\Version
    {
        return new \_PhpScoperf62d28230928\Jean85\Version($packageName, \_PhpScoperf62d28230928\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf62d28230928\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf62d28230928\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf62d28230928\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
