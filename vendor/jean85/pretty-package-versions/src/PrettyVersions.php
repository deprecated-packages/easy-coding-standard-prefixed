<?php

namespace _PhpScoper16399a42e87c\Jean85;

use _PhpScoper16399a42e87c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper16399a42e87c\Jean85\Version
    {
        return new \_PhpScoper16399a42e87c\Jean85\Version($packageName, \_PhpScoper16399a42e87c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper16399a42e87c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper16399a42e87c\Jean85\Version
    {
        return self::getVersion(\_PhpScoper16399a42e87c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
