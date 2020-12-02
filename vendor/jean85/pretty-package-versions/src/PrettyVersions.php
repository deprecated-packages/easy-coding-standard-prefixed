<?php

namespace _PhpScoperc95ae4bf942a\Jean85;

use _PhpScoperc95ae4bf942a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc95ae4bf942a\Jean85\Version
    {
        return new \_PhpScoperc95ae4bf942a\Jean85\Version($packageName, \_PhpScoperc95ae4bf942a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc95ae4bf942a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc95ae4bf942a\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc95ae4bf942a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
