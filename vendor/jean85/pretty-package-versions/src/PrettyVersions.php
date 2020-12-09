<?php

namespace _PhpScoper9b9ddfd01528\Jean85;

use _PhpScoper9b9ddfd01528\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper9b9ddfd01528\Jean85\Version
    {
        return new \_PhpScoper9b9ddfd01528\Jean85\Version($packageName, \_PhpScoper9b9ddfd01528\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper9b9ddfd01528\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper9b9ddfd01528\Jean85\Version
    {
        return self::getVersion(\_PhpScoper9b9ddfd01528\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
