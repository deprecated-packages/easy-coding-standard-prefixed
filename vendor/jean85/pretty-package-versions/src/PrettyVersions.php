<?php

namespace _PhpScoperef870243cfdb\Jean85;

use _PhpScoperef870243cfdb\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperef870243cfdb\Jean85\Version
    {
        return new \_PhpScoperef870243cfdb\Jean85\Version($packageName, \_PhpScoperef870243cfdb\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperef870243cfdb\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperef870243cfdb\Jean85\Version
    {
        return self::getVersion(\_PhpScoperef870243cfdb\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
