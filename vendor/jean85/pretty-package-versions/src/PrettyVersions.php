<?php

namespace _PhpScoper13133e188f67\Jean85;

use _PhpScoper13133e188f67\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper13133e188f67\Jean85\Version
    {
        return new \_PhpScoper13133e188f67\Jean85\Version($packageName, \_PhpScoper13133e188f67\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper13133e188f67\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper13133e188f67\Jean85\Version
    {
        return self::getVersion(\_PhpScoper13133e188f67\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
