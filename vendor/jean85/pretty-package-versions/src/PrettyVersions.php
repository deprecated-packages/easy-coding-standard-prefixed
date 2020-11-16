<?php

namespace _PhpScoperad4605bb9267\Jean85;

use _PhpScoperad4605bb9267\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperad4605bb9267\Jean85\Version
    {
        return new \_PhpScoperad4605bb9267\Jean85\Version($packageName, \_PhpScoperad4605bb9267\PackageVersions\Versions::getVersion($packageName));
    }
}
