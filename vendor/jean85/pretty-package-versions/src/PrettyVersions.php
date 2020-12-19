<?php

namespace _PhpScoper59da9ac954a6\Jean85;

use _PhpScoper59da9ac954a6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper59da9ac954a6\Jean85\Version
    {
        return new \_PhpScoper59da9ac954a6\Jean85\Version($packageName, \_PhpScoper59da9ac954a6\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper59da9ac954a6\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper59da9ac954a6\Jean85\Version
    {
        return self::getVersion(\_PhpScoper59da9ac954a6\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
