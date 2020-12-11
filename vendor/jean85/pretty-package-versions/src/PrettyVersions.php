<?php

namespace _PhpScoperc7c7dddc9238\Jean85;

use _PhpScoperc7c7dddc9238\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc7c7dddc9238\Jean85\Version
    {
        return new \_PhpScoperc7c7dddc9238\Jean85\Version($packageName, \_PhpScoperc7c7dddc9238\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc7c7dddc9238\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc7c7dddc9238\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc7c7dddc9238\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
