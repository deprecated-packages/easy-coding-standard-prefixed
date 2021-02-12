<?php

namespace _PhpScoper4fc0030e9d22\Jean85;

use _PhpScoper4fc0030e9d22\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper4fc0030e9d22\Jean85\Version
    {
        return new \_PhpScoper4fc0030e9d22\Jean85\Version($packageName, \_PhpScoper4fc0030e9d22\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper4fc0030e9d22\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper4fc0030e9d22\Jean85\Version
    {
        return self::getVersion(\_PhpScoper4fc0030e9d22\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
