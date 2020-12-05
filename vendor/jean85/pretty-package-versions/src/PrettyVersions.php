<?php

namespace _PhpScoper56c9df53a081\Jean85;

use _PhpScoper56c9df53a081\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper56c9df53a081\Jean85\Version
    {
        return new \_PhpScoper56c9df53a081\Jean85\Version($packageName, \_PhpScoper56c9df53a081\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper56c9df53a081\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper56c9df53a081\Jean85\Version
    {
        return self::getVersion(\_PhpScoper56c9df53a081\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
