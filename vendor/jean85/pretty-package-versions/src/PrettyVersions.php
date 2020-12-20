<?php

namespace _PhpScoperab9510cd5d97\Jean85;

use _PhpScoperab9510cd5d97\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperab9510cd5d97\Jean85\Version
    {
        return new \_PhpScoperab9510cd5d97\Jean85\Version($packageName, \_PhpScoperab9510cd5d97\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperab9510cd5d97\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperab9510cd5d97\Jean85\Version
    {
        return self::getVersion(\_PhpScoperab9510cd5d97\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
