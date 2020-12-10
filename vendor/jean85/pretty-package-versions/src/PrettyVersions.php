<?php

namespace _PhpScoper17bb67c99ade\Jean85;

use _PhpScoper17bb67c99ade\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper17bb67c99ade\Jean85\Version
    {
        return new \_PhpScoper17bb67c99ade\Jean85\Version($packageName, \_PhpScoper17bb67c99ade\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper17bb67c99ade\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper17bb67c99ade\Jean85\Version
    {
        return self::getVersion(\_PhpScoper17bb67c99ade\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
