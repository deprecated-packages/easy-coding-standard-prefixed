<?php

namespace _PhpScoper78af57a363a0\Jean85;

use _PhpScoper78af57a363a0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper78af57a363a0\Jean85\Version
    {
        return new \_PhpScoper78af57a363a0\Jean85\Version($packageName, \_PhpScoper78af57a363a0\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper78af57a363a0\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper78af57a363a0\Jean85\Version
    {
        return self::getVersion(\_PhpScoper78af57a363a0\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
