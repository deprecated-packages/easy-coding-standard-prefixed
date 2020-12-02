<?php

namespace _PhpScoperfaaf57618f34\Jean85;

use _PhpScoperfaaf57618f34\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfaaf57618f34\Jean85\Version
    {
        return new \_PhpScoperfaaf57618f34\Jean85\Version($packageName, \_PhpScoperfaaf57618f34\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfaaf57618f34\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfaaf57618f34\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfaaf57618f34\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
