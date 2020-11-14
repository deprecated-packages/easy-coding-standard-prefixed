<?php

namespace _PhpScopera749ac204cd2\Jean85;

use _PhpScopera749ac204cd2\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera749ac204cd2\Jean85\Version
    {
        return new \_PhpScopera749ac204cd2\Jean85\Version($packageName, \_PhpScopera749ac204cd2\PackageVersions\Versions::getVersion($packageName));
    }
}
