<?php

namespace _PhpScoper6207116d4311\Jean85;

use _PhpScoper6207116d4311\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper6207116d4311\Jean85\Version
    {
        return new \_PhpScoper6207116d4311\Jean85\Version($packageName, \_PhpScoper6207116d4311\PackageVersions\Versions::getVersion($packageName));
    }
}
