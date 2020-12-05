<?php

namespace _PhpScoper59ccd3f8e121\Jean85;

use _PhpScoper59ccd3f8e121\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper59ccd3f8e121\Jean85\Version
    {
        return new \_PhpScoper59ccd3f8e121\Jean85\Version($packageName, \_PhpScoper59ccd3f8e121\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper59ccd3f8e121\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper59ccd3f8e121\Jean85\Version
    {
        return self::getVersion(\_PhpScoper59ccd3f8e121\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
