<?php

namespace _PhpScoper6224e3b16fcc\Jean85;

use _PhpScoper6224e3b16fcc\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper6224e3b16fcc\Jean85\Version
    {
        return new \_PhpScoper6224e3b16fcc\Jean85\Version($packageName, \_PhpScoper6224e3b16fcc\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper6224e3b16fcc\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper6224e3b16fcc\Jean85\Version
    {
        return self::getVersion(\_PhpScoper6224e3b16fcc\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
