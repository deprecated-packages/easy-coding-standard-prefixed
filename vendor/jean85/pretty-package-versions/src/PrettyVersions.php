<?php

namespace _PhpScoper59558822d8c7\Jean85;

use _PhpScoper59558822d8c7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper59558822d8c7\Jean85\Version
    {
        return new \_PhpScoper59558822d8c7\Jean85\Version($packageName, \_PhpScoper59558822d8c7\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper59558822d8c7\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper59558822d8c7\Jean85\Version
    {
        return self::getVersion(\_PhpScoper59558822d8c7\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
