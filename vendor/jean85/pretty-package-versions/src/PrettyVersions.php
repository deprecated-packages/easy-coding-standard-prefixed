<?php

namespace _PhpScoperb730595bc9f4\Jean85;

use _PhpScoperb730595bc9f4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb730595bc9f4\Jean85\Version
    {
        return new \_PhpScoperb730595bc9f4\Jean85\Version($packageName, \_PhpScoperb730595bc9f4\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb730595bc9f4\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb730595bc9f4\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb730595bc9f4\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
