<?php

namespace _PhpScoper4d3fa30a680b\Jean85;

use _PhpScoper4d3fa30a680b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper4d3fa30a680b\Jean85\Version
    {
        return new \_PhpScoper4d3fa30a680b\Jean85\Version($packageName, \_PhpScoper4d3fa30a680b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper4d3fa30a680b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper4d3fa30a680b\Jean85\Version
    {
        return self::getVersion(\_PhpScoper4d3fa30a680b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
