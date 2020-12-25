<?php

namespace _PhpScoper64ca614e27fd\Jean85;

use _PhpScoper64ca614e27fd\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper64ca614e27fd\Jean85\Version
    {
        return new \_PhpScoper64ca614e27fd\Jean85\Version($packageName, \_PhpScoper64ca614e27fd\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper64ca614e27fd\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper64ca614e27fd\Jean85\Version
    {
        return self::getVersion(\_PhpScoper64ca614e27fd\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
