<?php

namespace _PhpScoper578a67c80b2b\Jean85;

use _PhpScoper578a67c80b2b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper578a67c80b2b\Jean85\Version
    {
        return new \_PhpScoper578a67c80b2b\Jean85\Version($packageName, \_PhpScoper578a67c80b2b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper578a67c80b2b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper578a67c80b2b\Jean85\Version
    {
        return self::getVersion(\_PhpScoper578a67c80b2b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
