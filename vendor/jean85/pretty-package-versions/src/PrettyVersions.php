<?php

namespace _PhpScoper89ec3c69e67d\Jean85;

use _PhpScoper89ec3c69e67d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper89ec3c69e67d\Jean85\Version
    {
        return new \_PhpScoper89ec3c69e67d\Jean85\Version($packageName, \_PhpScoper89ec3c69e67d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper89ec3c69e67d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper89ec3c69e67d\Jean85\Version
    {
        return self::getVersion(\_PhpScoper89ec3c69e67d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
