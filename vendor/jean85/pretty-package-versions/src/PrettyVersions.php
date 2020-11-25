<?php

namespace _PhpScoper7312d63d356f\Jean85;

use _PhpScoper7312d63d356f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7312d63d356f\Jean85\Version
    {
        return new \_PhpScoper7312d63d356f\Jean85\Version($packageName, \_PhpScoper7312d63d356f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper7312d63d356f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper7312d63d356f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper7312d63d356f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
