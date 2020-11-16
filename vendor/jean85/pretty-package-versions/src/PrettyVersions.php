<?php

namespace _PhpScoper239b374a39c8\Jean85;

use _PhpScoper239b374a39c8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper239b374a39c8\Jean85\Version
    {
        return new \_PhpScoper239b374a39c8\Jean85\Version($packageName, \_PhpScoper239b374a39c8\PackageVersions\Versions::getVersion($packageName));
    }
}
