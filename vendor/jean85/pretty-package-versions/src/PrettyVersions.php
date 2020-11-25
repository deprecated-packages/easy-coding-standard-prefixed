<?php

namespace _PhpScoperca8ca183ac38\Jean85;

use _PhpScoperca8ca183ac38\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperca8ca183ac38\Jean85\Version
    {
        return new \_PhpScoperca8ca183ac38\Jean85\Version($packageName, \_PhpScoperca8ca183ac38\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperca8ca183ac38\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperca8ca183ac38\Jean85\Version
    {
        return self::getVersion(\_PhpScoperca8ca183ac38\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
