<?php

namespace _PhpScoperba24099fc6fd\Jean85;

use _PhpScoperba24099fc6fd\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperba24099fc6fd\Jean85\Version
    {
        return new \_PhpScoperba24099fc6fd\Jean85\Version($packageName, \_PhpScoperba24099fc6fd\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperba24099fc6fd\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperba24099fc6fd\Jean85\Version
    {
        return self::getVersion(\_PhpScoperba24099fc6fd\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
