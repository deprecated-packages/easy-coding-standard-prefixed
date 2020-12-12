<?php

namespace _PhpScoper79449c4e744b\Jean85;

use _PhpScoper79449c4e744b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper79449c4e744b\Jean85\Version
    {
        return new \_PhpScoper79449c4e744b\Jean85\Version($packageName, \_PhpScoper79449c4e744b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper79449c4e744b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper79449c4e744b\Jean85\Version
    {
        return self::getVersion(\_PhpScoper79449c4e744b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
