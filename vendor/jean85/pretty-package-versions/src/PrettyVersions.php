<?php

namespace _PhpScoper6d28bdf6a7f9\Jean85;

use _PhpScoper6d28bdf6a7f9\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper6d28bdf6a7f9\Jean85\Version
    {
        return new \_PhpScoper6d28bdf6a7f9\Jean85\Version($packageName, \_PhpScoper6d28bdf6a7f9\PackageVersions\Versions::getVersion($packageName));
    }
}
