<?php

namespace _PhpScoperf65af7a6d9a0\Jean85;

use _PhpScoperf65af7a6d9a0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf65af7a6d9a0\Jean85\Version
    {
        return new \_PhpScoperf65af7a6d9a0\Jean85\Version($packageName, \_PhpScoperf65af7a6d9a0\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf65af7a6d9a0\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf65af7a6d9a0\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf65af7a6d9a0\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
