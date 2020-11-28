<?php

namespace _PhpScoperc8b83ee8976a\Jean85;

use _PhpScoperc8b83ee8976a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc8b83ee8976a\Jean85\Version
    {
        return new \_PhpScoperc8b83ee8976a\Jean85\Version($packageName, \_PhpScoperc8b83ee8976a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc8b83ee8976a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc8b83ee8976a\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc8b83ee8976a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
