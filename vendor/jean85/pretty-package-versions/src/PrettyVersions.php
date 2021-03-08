<?php

namespace _PhpScoper4f42ead57614\Jean85;

use _PhpScoper4f42ead57614\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper4f42ead57614\Jean85\Version
    {
        return new \_PhpScoper4f42ead57614\Jean85\Version($packageName, \_PhpScoper4f42ead57614\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper4f42ead57614\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper4f42ead57614\Jean85\Version
    {
        return self::getVersion(\_PhpScoper4f42ead57614\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
