<?php

namespace _PhpScoperbc5235eb86f3\Jean85;

use _PhpScoperbc5235eb86f3\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperbc5235eb86f3\Jean85\Version
    {
        return new \_PhpScoperbc5235eb86f3\Jean85\Version($packageName, \_PhpScoperbc5235eb86f3\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperbc5235eb86f3\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperbc5235eb86f3\Jean85\Version
    {
        return self::getVersion(\_PhpScoperbc5235eb86f3\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
