<?php

namespace _PhpScoperda2604e33acb\Jean85;

use _PhpScoperda2604e33acb\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperda2604e33acb\Jean85\Version
    {
        return new \_PhpScoperda2604e33acb\Jean85\Version($packageName, \_PhpScoperda2604e33acb\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperda2604e33acb\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperda2604e33acb\Jean85\Version
    {
        return self::getVersion(\_PhpScoperda2604e33acb\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
