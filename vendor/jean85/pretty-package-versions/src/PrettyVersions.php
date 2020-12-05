<?php

namespace _PhpScoperc83f84c90b60\Jean85;

use _PhpScoperc83f84c90b60\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc83f84c90b60\Jean85\Version
    {
        return new \_PhpScoperc83f84c90b60\Jean85\Version($packageName, \_PhpScoperc83f84c90b60\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc83f84c90b60\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc83f84c90b60\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc83f84c90b60\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
