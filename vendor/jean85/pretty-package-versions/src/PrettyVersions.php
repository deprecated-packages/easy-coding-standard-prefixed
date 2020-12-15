<?php

namespace _PhpScoper37a255897161\Jean85;

use _PhpScoper37a255897161\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper37a255897161\Jean85\Version
    {
        return new \_PhpScoper37a255897161\Jean85\Version($packageName, \_PhpScoper37a255897161\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper37a255897161\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper37a255897161\Jean85\Version
    {
        return self::getVersion(\_PhpScoper37a255897161\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
