<?php

namespace _PhpScoperd74b3ed28382\Jean85;

use _PhpScoperd74b3ed28382\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd74b3ed28382\Jean85\Version
    {
        return new \_PhpScoperd74b3ed28382\Jean85\Version($packageName, \_PhpScoperd74b3ed28382\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd74b3ed28382\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd74b3ed28382\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd74b3ed28382\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
