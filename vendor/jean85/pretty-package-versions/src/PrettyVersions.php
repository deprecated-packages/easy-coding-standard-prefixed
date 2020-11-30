<?php

namespace _PhpScopera09818bc50da\Jean85;

use _PhpScopera09818bc50da\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera09818bc50da\Jean85\Version
    {
        return new \_PhpScopera09818bc50da\Jean85\Version($packageName, \_PhpScopera09818bc50da\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera09818bc50da\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera09818bc50da\Jean85\Version
    {
        return self::getVersion(\_PhpScopera09818bc50da\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
