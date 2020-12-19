<?php

namespace _PhpScoperd1a5bf00e83e\Jean85;

use _PhpScoperd1a5bf00e83e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd1a5bf00e83e\Jean85\Version
    {
        return new \_PhpScoperd1a5bf00e83e\Jean85\Version($packageName, \_PhpScoperd1a5bf00e83e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd1a5bf00e83e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd1a5bf00e83e\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd1a5bf00e83e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
