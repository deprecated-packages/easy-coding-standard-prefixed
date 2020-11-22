<?php

namespace _PhpScoperac4e86be08e5\Jean85;

use _PhpScoperac4e86be08e5\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperac4e86be08e5\Jean85\Version
    {
        return new \_PhpScoperac4e86be08e5\Jean85\Version($packageName, \_PhpScoperac4e86be08e5\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperac4e86be08e5\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperac4e86be08e5\Jean85\Version
    {
        return self::getVersion(\_PhpScoperac4e86be08e5\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
