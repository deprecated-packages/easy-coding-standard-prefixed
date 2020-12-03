<?php

namespace _PhpScoperba5852cc6147\Jean85;

use _PhpScoperba5852cc6147\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperba5852cc6147\Jean85\Version
    {
        return new \_PhpScoperba5852cc6147\Jean85\Version($packageName, \_PhpScoperba5852cc6147\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperba5852cc6147\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperba5852cc6147\Jean85\Version
    {
        return self::getVersion(\_PhpScoperba5852cc6147\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
