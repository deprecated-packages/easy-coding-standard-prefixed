<?php

namespace _PhpScopere341acab57d4\Jean85;

use _PhpScopere341acab57d4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere341acab57d4\Jean85\Version
    {
        return new \_PhpScopere341acab57d4\Jean85\Version($packageName, \_PhpScopere341acab57d4\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere341acab57d4\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere341acab57d4\Jean85\Version
    {
        return self::getVersion(\_PhpScopere341acab57d4\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
