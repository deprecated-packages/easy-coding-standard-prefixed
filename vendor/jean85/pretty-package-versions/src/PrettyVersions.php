<?php

namespace _PhpScoper4936962185e7\Jean85;

use _PhpScoper4936962185e7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper4936962185e7\Jean85\Version
    {
        return new \_PhpScoper4936962185e7\Jean85\Version($packageName, \_PhpScoper4936962185e7\PackageVersions\Versions::getVersion($packageName));
    }
}
