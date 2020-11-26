<?php

namespace _PhpScoper167729fa1dde\Jean85;

use _PhpScoper167729fa1dde\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper167729fa1dde\Jean85\Version
    {
        return new \_PhpScoper167729fa1dde\Jean85\Version($packageName, \_PhpScoper167729fa1dde\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper167729fa1dde\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper167729fa1dde\Jean85\Version
    {
        return self::getVersion(\_PhpScoper167729fa1dde\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
