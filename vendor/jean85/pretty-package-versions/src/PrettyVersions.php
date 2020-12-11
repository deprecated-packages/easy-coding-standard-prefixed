<?php

namespace _PhpScoperb26833cc184d\Jean85;

use _PhpScoperb26833cc184d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb26833cc184d\Jean85\Version
    {
        return new \_PhpScoperb26833cc184d\Jean85\Version($packageName, \_PhpScoperb26833cc184d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb26833cc184d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb26833cc184d\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb26833cc184d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
