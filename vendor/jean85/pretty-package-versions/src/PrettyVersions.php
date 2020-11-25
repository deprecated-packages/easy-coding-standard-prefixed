<?php

namespace _PhpScoperaa402dd1b1f1\Jean85;

use _PhpScoperaa402dd1b1f1\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperaa402dd1b1f1\Jean85\Version
    {
        return new \_PhpScoperaa402dd1b1f1\Jean85\Version($packageName, \_PhpScoperaa402dd1b1f1\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperaa402dd1b1f1\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperaa402dd1b1f1\Jean85\Version
    {
        return self::getVersion(\_PhpScoperaa402dd1b1f1\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
