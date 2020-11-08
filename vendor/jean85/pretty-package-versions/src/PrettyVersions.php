<?php

namespace _PhpScoperd79d87c3336e\Jean85;

use _PhpScoperd79d87c3336e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd79d87c3336e\Jean85\Version
    {
        return new \_PhpScoperd79d87c3336e\Jean85\Version($packageName, \_PhpScoperd79d87c3336e\PackageVersions\Versions::getVersion($packageName));
    }
}
