<?php

namespace _PhpScoperb6a8e65b492c\Jean85;

use _PhpScoperb6a8e65b492c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb6a8e65b492c\Jean85\Version
    {
        return new \_PhpScoperb6a8e65b492c\Jean85\Version($packageName, \_PhpScoperb6a8e65b492c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb6a8e65b492c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb6a8e65b492c\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb6a8e65b492c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
