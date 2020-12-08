<?php

namespace _PhpScoperf3f1be0d8a30\Jean85;

use _PhpScoperf3f1be0d8a30\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf3f1be0d8a30\Jean85\Version
    {
        return new \_PhpScoperf3f1be0d8a30\Jean85\Version($packageName, \_PhpScoperf3f1be0d8a30\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf3f1be0d8a30\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf3f1be0d8a30\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf3f1be0d8a30\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
