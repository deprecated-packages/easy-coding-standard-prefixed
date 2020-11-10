<?php

namespace _PhpScoper836bc32aecc2\Jean85;

use _PhpScoper836bc32aecc2\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper836bc32aecc2\Jean85\Version
    {
        return new \_PhpScoper836bc32aecc2\Jean85\Version($packageName, \_PhpScoper836bc32aecc2\PackageVersions\Versions::getVersion($packageName));
    }
}
