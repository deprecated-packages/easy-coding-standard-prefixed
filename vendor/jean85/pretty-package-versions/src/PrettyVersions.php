<?php

namespace _PhpScoper31ba553edf97\Jean85;

use _PhpScoper31ba553edf97\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper31ba553edf97\Jean85\Version
    {
        return new \_PhpScoper31ba553edf97\Jean85\Version($packageName, \_PhpScoper31ba553edf97\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper31ba553edf97\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper31ba553edf97\Jean85\Version
    {
        return self::getVersion(\_PhpScoper31ba553edf97\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
