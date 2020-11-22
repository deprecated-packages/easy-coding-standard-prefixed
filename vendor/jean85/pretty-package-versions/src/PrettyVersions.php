<?php

namespace _PhpScoperc5bee3a837bb\Jean85;

use _PhpScoperc5bee3a837bb\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc5bee3a837bb\Jean85\Version
    {
        return new \_PhpScoperc5bee3a837bb\Jean85\Version($packageName, \_PhpScoperc5bee3a837bb\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc5bee3a837bb\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc5bee3a837bb\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc5bee3a837bb\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
