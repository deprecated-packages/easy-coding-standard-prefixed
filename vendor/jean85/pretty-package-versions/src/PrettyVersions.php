<?php

namespace _PhpScoperbd5c5a045153\Jean85;

use _PhpScoperbd5c5a045153\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperbd5c5a045153\Jean85\Version
    {
        return new \_PhpScoperbd5c5a045153\Jean85\Version($packageName, \_PhpScoperbd5c5a045153\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperbd5c5a045153\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperbd5c5a045153\Jean85\Version
    {
        return self::getVersion(\_PhpScoperbd5c5a045153\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
