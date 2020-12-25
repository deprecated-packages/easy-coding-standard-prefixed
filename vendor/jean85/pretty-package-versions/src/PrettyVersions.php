<?php

namespace _PhpScoperc8fea59b0cb1\Jean85;

use _PhpScoperc8fea59b0cb1\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc8fea59b0cb1\Jean85\Version
    {
        return new \_PhpScoperc8fea59b0cb1\Jean85\Version($packageName, \_PhpScoperc8fea59b0cb1\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc8fea59b0cb1\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc8fea59b0cb1\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc8fea59b0cb1\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
