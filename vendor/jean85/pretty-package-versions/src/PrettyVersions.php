<?php

namespace _PhpScoperb44a315fec16\Jean85;

use _PhpScoperb44a315fec16\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb44a315fec16\Jean85\Version
    {
        return new \_PhpScoperb44a315fec16\Jean85\Version($packageName, \_PhpScoperb44a315fec16\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb44a315fec16\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb44a315fec16\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb44a315fec16\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
