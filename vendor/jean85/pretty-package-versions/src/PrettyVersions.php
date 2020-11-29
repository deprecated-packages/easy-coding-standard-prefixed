<?php

namespace _PhpScoper28ab463fc3ba\Jean85;

use _PhpScoper28ab463fc3ba\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper28ab463fc3ba\Jean85\Version
    {
        return new \_PhpScoper28ab463fc3ba\Jean85\Version($packageName, \_PhpScoper28ab463fc3ba\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper28ab463fc3ba\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper28ab463fc3ba\Jean85\Version
    {
        return self::getVersion(\_PhpScoper28ab463fc3ba\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
