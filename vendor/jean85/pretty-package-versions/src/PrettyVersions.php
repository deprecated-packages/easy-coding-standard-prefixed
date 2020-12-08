<?php

namespace _PhpScoperf053e888b664\Jean85;

use _PhpScoperf053e888b664\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf053e888b664\Jean85\Version
    {
        return new \_PhpScoperf053e888b664\Jean85\Version($packageName, \_PhpScoperf053e888b664\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf053e888b664\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf053e888b664\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf053e888b664\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
