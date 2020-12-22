<?php

namespace _PhpScoper57272265e1c9\Jean85;

use _PhpScoper57272265e1c9\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper57272265e1c9\Jean85\Version
    {
        return new \_PhpScoper57272265e1c9\Jean85\Version($packageName, \_PhpScoper57272265e1c9\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper57272265e1c9\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper57272265e1c9\Jean85\Version
    {
        return self::getVersion(\_PhpScoper57272265e1c9\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
