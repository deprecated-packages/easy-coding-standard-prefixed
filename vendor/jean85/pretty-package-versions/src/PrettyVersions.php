<?php

namespace _PhpScoperedc2e0c967db\Jean85;

use _PhpScoperedc2e0c967db\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperedc2e0c967db\Jean85\Version
    {
        return new \_PhpScoperedc2e0c967db\Jean85\Version($packageName, \_PhpScoperedc2e0c967db\PackageVersions\Versions::getVersion($packageName));
    }
}
