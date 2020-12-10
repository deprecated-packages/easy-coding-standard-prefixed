<?php

namespace _PhpScopera40fc53e636b\Jean85;

use _PhpScopera40fc53e636b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera40fc53e636b\Jean85\Version
    {
        return new \_PhpScopera40fc53e636b\Jean85\Version($packageName, \_PhpScopera40fc53e636b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera40fc53e636b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera40fc53e636b\Jean85\Version
    {
        return self::getVersion(\_PhpScopera40fc53e636b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
