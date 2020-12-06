<?php

namespace _PhpScoper3e8786a75afe\Jean85;

use _PhpScoper3e8786a75afe\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper3e8786a75afe\Jean85\Version
    {
        return new \_PhpScoper3e8786a75afe\Jean85\Version($packageName, \_PhpScoper3e8786a75afe\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper3e8786a75afe\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper3e8786a75afe\Jean85\Version
    {
        return self::getVersion(\_PhpScoper3e8786a75afe\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
