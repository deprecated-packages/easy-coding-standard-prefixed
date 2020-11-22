<?php

namespace _PhpScoperfacc742d2745\Jean85;

use _PhpScoperfacc742d2745\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfacc742d2745\Jean85\Version
    {
        return new \_PhpScoperfacc742d2745\Jean85\Version($packageName, \_PhpScoperfacc742d2745\PackageVersions\Versions::getVersion($packageName));
    }
}
