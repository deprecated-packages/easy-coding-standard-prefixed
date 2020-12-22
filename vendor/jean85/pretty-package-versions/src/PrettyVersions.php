<?php

namespace _PhpScoper68a3a2539032\Jean85;

use _PhpScoper68a3a2539032\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper68a3a2539032\Jean85\Version
    {
        return new \_PhpScoper68a3a2539032\Jean85\Version($packageName, \_PhpScoper68a3a2539032\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper68a3a2539032\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper68a3a2539032\Jean85\Version
    {
        return self::getVersion(\_PhpScoper68a3a2539032\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
