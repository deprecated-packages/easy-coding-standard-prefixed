<?php

namespace _PhpScoper08748c77fa1c\Jean85;

use _PhpScoper08748c77fa1c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper08748c77fa1c\Jean85\Version
    {
        return new \_PhpScoper08748c77fa1c\Jean85\Version($packageName, \_PhpScoper08748c77fa1c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper08748c77fa1c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper08748c77fa1c\Jean85\Version
    {
        return self::getVersion(\_PhpScoper08748c77fa1c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
