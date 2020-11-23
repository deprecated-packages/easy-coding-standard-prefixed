<?php

namespace _PhpScoperc4b135661b3a\Jean85;

use _PhpScoperc4b135661b3a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc4b135661b3a\Jean85\Version
    {
        return new \_PhpScoperc4b135661b3a\Jean85\Version($packageName, \_PhpScoperc4b135661b3a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc4b135661b3a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc4b135661b3a\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc4b135661b3a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
