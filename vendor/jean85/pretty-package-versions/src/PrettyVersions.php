<?php

namespace _PhpScoper418afc2f157c\Jean85;

use _PhpScoper418afc2f157c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper418afc2f157c\Jean85\Version
    {
        return new \_PhpScoper418afc2f157c\Jean85\Version($packageName, \_PhpScoper418afc2f157c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper418afc2f157c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper418afc2f157c\Jean85\Version
    {
        return self::getVersion(\_PhpScoper418afc2f157c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
