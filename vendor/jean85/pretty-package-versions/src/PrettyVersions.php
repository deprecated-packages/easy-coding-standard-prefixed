<?php

namespace _PhpScoperd4c5032f0671\Jean85;

use _PhpScoperd4c5032f0671\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd4c5032f0671\Jean85\Version
    {
        return new \_PhpScoperd4c5032f0671\Jean85\Version($packageName, \_PhpScoperd4c5032f0671\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd4c5032f0671\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd4c5032f0671\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd4c5032f0671\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
