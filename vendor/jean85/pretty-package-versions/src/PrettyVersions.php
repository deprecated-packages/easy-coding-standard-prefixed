<?php

namespace _PhpScopera4be459e5e3d\Jean85;

use _PhpScopera4be459e5e3d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera4be459e5e3d\Jean85\Version
    {
        return new \_PhpScopera4be459e5e3d\Jean85\Version($packageName, \_PhpScopera4be459e5e3d\PackageVersions\Versions::getVersion($packageName));
    }
}
