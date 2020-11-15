<?php

namespace _PhpScopera189153e1f79\Jean85;

use _PhpScopera189153e1f79\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera189153e1f79\Jean85\Version
    {
        return new \_PhpScopera189153e1f79\Jean85\Version($packageName, \_PhpScopera189153e1f79\PackageVersions\Versions::getVersion($packageName));
    }
}
