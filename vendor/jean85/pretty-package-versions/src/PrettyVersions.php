<?php

namespace _PhpScoper92597f5b42a7\Jean85;

use _PhpScoper92597f5b42a7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper92597f5b42a7\Jean85\Version
    {
        return new \_PhpScoper92597f5b42a7\Jean85\Version($packageName, \_PhpScoper92597f5b42a7\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper92597f5b42a7\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper92597f5b42a7\Jean85\Version
    {
        return self::getVersion(\_PhpScoper92597f5b42a7\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
