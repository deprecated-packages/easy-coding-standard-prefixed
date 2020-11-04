<?php

namespace _PhpScoperfabf55fef6b7\Jean85;

use _PhpScoperfabf55fef6b7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfabf55fef6b7\Jean85\Version
    {
        return new \_PhpScoperfabf55fef6b7\Jean85\Version($packageName, \_PhpScoperfabf55fef6b7\PackageVersions\Versions::getVersion($packageName));
    }
}
