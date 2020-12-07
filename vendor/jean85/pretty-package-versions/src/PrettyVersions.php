<?php

namespace _PhpScoperb83706991c7f\Jean85;

use _PhpScoperb83706991c7f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb83706991c7f\Jean85\Version
    {
        return new \_PhpScoperb83706991c7f\Jean85\Version($packageName, \_PhpScoperb83706991c7f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb83706991c7f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb83706991c7f\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb83706991c7f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
