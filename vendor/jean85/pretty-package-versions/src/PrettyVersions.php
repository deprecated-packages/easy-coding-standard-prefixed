<?php

namespace _PhpScoper5ade29b97028\Jean85;

use _PhpScoper5ade29b97028\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper5ade29b97028\Jean85\Version
    {
        return new \_PhpScoper5ade29b97028\Jean85\Version($packageName, \_PhpScoper5ade29b97028\PackageVersions\Versions::getVersion($packageName));
    }
}
