<?php

namespace _PhpScoper6db4fde00cda\Jean85;

use _PhpScoper6db4fde00cda\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper6db4fde00cda\Jean85\Version
    {
        return new \_PhpScoper6db4fde00cda\Jean85\Version($packageName, \_PhpScoper6db4fde00cda\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper6db4fde00cda\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper6db4fde00cda\Jean85\Version
    {
        return self::getVersion(\_PhpScoper6db4fde00cda\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
