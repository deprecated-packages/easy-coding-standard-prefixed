<?php

namespace _PhpScoperc233426b15e0\Jean85;

use _PhpScoperc233426b15e0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc233426b15e0\Jean85\Version
    {
        return new \_PhpScoperc233426b15e0\Jean85\Version($packageName, \_PhpScoperc233426b15e0\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc233426b15e0\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc233426b15e0\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc233426b15e0\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
