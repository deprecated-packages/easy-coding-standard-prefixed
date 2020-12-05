<?php

namespace _PhpScoper81b3ff5ab9fe\Jean85;

use _PhpScoper81b3ff5ab9fe\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper81b3ff5ab9fe\Jean85\Version
    {
        return new \_PhpScoper81b3ff5ab9fe\Jean85\Version($packageName, \_PhpScoper81b3ff5ab9fe\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper81b3ff5ab9fe\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper81b3ff5ab9fe\Jean85\Version
    {
        return self::getVersion(\_PhpScoper81b3ff5ab9fe\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
