<?php

namespace _PhpScoperc64a4ac1af35\Jean85;

use _PhpScoperc64a4ac1af35\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc64a4ac1af35\Jean85\Version
    {
        return new \_PhpScoperc64a4ac1af35\Jean85\Version($packageName, \_PhpScoperc64a4ac1af35\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc64a4ac1af35\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc64a4ac1af35\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc64a4ac1af35\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
