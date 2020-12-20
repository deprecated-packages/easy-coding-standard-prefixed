<?php

namespace _PhpScoper57210e33e43a\Jean85;

use _PhpScoper57210e33e43a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper57210e33e43a\Jean85\Version
    {
        return new \_PhpScoper57210e33e43a\Jean85\Version($packageName, \_PhpScoper57210e33e43a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper57210e33e43a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper57210e33e43a\Jean85\Version
    {
        return self::getVersion(\_PhpScoper57210e33e43a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
