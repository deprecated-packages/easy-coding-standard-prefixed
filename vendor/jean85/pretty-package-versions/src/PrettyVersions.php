<?php

namespace _PhpScoper967d20dce97a\Jean85;

use _PhpScoper967d20dce97a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper967d20dce97a\Jean85\Version
    {
        return new \_PhpScoper967d20dce97a\Jean85\Version($packageName, \_PhpScoper967d20dce97a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper967d20dce97a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper967d20dce97a\Jean85\Version
    {
        return self::getVersion(\_PhpScoper967d20dce97a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
