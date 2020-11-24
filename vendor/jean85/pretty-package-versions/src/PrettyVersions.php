<?php

namespace _PhpScoper528afa732cbd\Jean85;

use _PhpScoper528afa732cbd\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper528afa732cbd\Jean85\Version
    {
        return new \_PhpScoper528afa732cbd\Jean85\Version($packageName, \_PhpScoper528afa732cbd\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper528afa732cbd\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper528afa732cbd\Jean85\Version
    {
        return self::getVersion(\_PhpScoper528afa732cbd\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
