<?php

namespace _PhpScoper7f5523334c1b\Jean85;

use _PhpScoper7f5523334c1b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7f5523334c1b\Jean85\Version
    {
        return new \_PhpScoper7f5523334c1b\Jean85\Version($packageName, \_PhpScoper7f5523334c1b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper7f5523334c1b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper7f5523334c1b\Jean85\Version
    {
        return self::getVersion(\_PhpScoper7f5523334c1b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
