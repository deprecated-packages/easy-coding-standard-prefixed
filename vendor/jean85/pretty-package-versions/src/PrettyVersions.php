<?php

namespace _PhpScoper0d0ee1ba46d4\Jean85;

use _PhpScoper0d0ee1ba46d4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper0d0ee1ba46d4\Jean85\Version
    {
        return new \_PhpScoper0d0ee1ba46d4\Jean85\Version($packageName, \_PhpScoper0d0ee1ba46d4\PackageVersions\Versions::getVersion($packageName));
    }
}
