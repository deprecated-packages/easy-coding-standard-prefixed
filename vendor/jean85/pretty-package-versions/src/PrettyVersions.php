<?php

namespace _PhpScoper06c5fb6c14ed\Jean85;

use _PhpScoper06c5fb6c14ed\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper06c5fb6c14ed\Jean85\Version
    {
        return new \_PhpScoper06c5fb6c14ed\Jean85\Version($packageName, \_PhpScoper06c5fb6c14ed\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper06c5fb6c14ed\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper06c5fb6c14ed\Jean85\Version
    {
        return self::getVersion(\_PhpScoper06c5fb6c14ed\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
