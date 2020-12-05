<?php

namespace _PhpScoperb6ccec8ab642\Jean85;

use _PhpScoperb6ccec8ab642\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb6ccec8ab642\Jean85\Version
    {
        return new \_PhpScoperb6ccec8ab642\Jean85\Version($packageName, \_PhpScoperb6ccec8ab642\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb6ccec8ab642\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb6ccec8ab642\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb6ccec8ab642\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
