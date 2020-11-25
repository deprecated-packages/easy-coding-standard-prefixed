<?php

namespace _PhpScoperd301db66c80c\Jean85;

use _PhpScoperd301db66c80c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd301db66c80c\Jean85\Version
    {
        return new \_PhpScoperd301db66c80c\Jean85\Version($packageName, \_PhpScoperd301db66c80c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd301db66c80c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd301db66c80c\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd301db66c80c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
