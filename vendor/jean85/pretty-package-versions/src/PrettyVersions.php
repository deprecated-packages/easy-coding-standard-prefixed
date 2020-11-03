<?php

namespace _PhpScoper4848279dba07\Jean85;

use _PhpScoper4848279dba07\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper4848279dba07\Jean85\Version
    {
        return new \_PhpScoper4848279dba07\Jean85\Version($packageName, \_PhpScoper4848279dba07\PackageVersions\Versions::getVersion($packageName));
    }
}
