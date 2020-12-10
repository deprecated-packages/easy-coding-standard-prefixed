<?php

namespace _PhpScoperf7b66f9e3817\Jean85;

use _PhpScoperf7b66f9e3817\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf7b66f9e3817\Jean85\Version
    {
        return new \_PhpScoperf7b66f9e3817\Jean85\Version($packageName, \_PhpScoperf7b66f9e3817\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf7b66f9e3817\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf7b66f9e3817\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf7b66f9e3817\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
