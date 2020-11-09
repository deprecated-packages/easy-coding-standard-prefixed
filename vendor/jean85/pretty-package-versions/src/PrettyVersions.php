<?php

namespace _PhpScopere015d8a3273c\Jean85;

use _PhpScopere015d8a3273c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere015d8a3273c\Jean85\Version
    {
        return new \_PhpScopere015d8a3273c\Jean85\Version($packageName, \_PhpScopere015d8a3273c\PackageVersions\Versions::getVersion($packageName));
    }
}
