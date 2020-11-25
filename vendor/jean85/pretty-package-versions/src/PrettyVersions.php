<?php

namespace _PhpScoperaac5f7c652e4\Jean85;

use _PhpScoperaac5f7c652e4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperaac5f7c652e4\Jean85\Version
    {
        return new \_PhpScoperaac5f7c652e4\Jean85\Version($packageName, \_PhpScoperaac5f7c652e4\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperaac5f7c652e4\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperaac5f7c652e4\Jean85\Version
    {
        return self::getVersion(\_PhpScoperaac5f7c652e4\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
