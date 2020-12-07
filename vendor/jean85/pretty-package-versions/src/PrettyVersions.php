<?php

namespace _PhpScopereb8678af2407\Jean85;

use _PhpScopereb8678af2407\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopereb8678af2407\Jean85\Version
    {
        return new \_PhpScopereb8678af2407\Jean85\Version($packageName, \_PhpScopereb8678af2407\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopereb8678af2407\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopereb8678af2407\Jean85\Version
    {
        return self::getVersion(\_PhpScopereb8678af2407\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
