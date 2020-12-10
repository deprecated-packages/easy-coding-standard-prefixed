<?php

namespace _PhpScoperb458b528613f\Jean85;

use _PhpScoperb458b528613f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb458b528613f\Jean85\Version
    {
        return new \_PhpScoperb458b528613f\Jean85\Version($packageName, \_PhpScoperb458b528613f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb458b528613f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb458b528613f\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb458b528613f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
