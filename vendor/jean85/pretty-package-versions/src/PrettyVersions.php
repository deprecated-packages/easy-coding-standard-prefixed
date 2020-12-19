<?php

namespace _PhpScoper269dc521b0fa\Jean85;

use _PhpScoper269dc521b0fa\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper269dc521b0fa\Jean85\Version
    {
        return new \_PhpScoper269dc521b0fa\Jean85\Version($packageName, \_PhpScoper269dc521b0fa\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper269dc521b0fa\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper269dc521b0fa\Jean85\Version
    {
        return self::getVersion(\_PhpScoper269dc521b0fa\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
