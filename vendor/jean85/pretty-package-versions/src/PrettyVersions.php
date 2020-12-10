<?php

namespace _PhpScoper58a0a169dcfb\Jean85;

use _PhpScoper58a0a169dcfb\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper58a0a169dcfb\Jean85\Version
    {
        return new \_PhpScoper58a0a169dcfb\Jean85\Version($packageName, \_PhpScoper58a0a169dcfb\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper58a0a169dcfb\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper58a0a169dcfb\Jean85\Version
    {
        return self::getVersion(\_PhpScoper58a0a169dcfb\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
