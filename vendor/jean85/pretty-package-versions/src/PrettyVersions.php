<?php

namespace _PhpScoperc4ea0f0bd23f\Jean85;

use _PhpScoperc4ea0f0bd23f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc4ea0f0bd23f\Jean85\Version
    {
        return new \_PhpScoperc4ea0f0bd23f\Jean85\Version($packageName, \_PhpScoperc4ea0f0bd23f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc4ea0f0bd23f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc4ea0f0bd23f\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc4ea0f0bd23f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
