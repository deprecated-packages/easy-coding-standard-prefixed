<?php

namespace _PhpScoper89c09b8e7101\Jean85;

use _PhpScoper89c09b8e7101\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper89c09b8e7101\Jean85\Version
    {
        return new \_PhpScoper89c09b8e7101\Jean85\Version($packageName, \_PhpScoper89c09b8e7101\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper89c09b8e7101\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper89c09b8e7101\Jean85\Version
    {
        return self::getVersion(\_PhpScoper89c09b8e7101\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
