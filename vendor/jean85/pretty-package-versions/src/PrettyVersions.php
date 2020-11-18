<?php

namespace _PhpScoperf77bffce0320\Jean85;

use _PhpScoperf77bffce0320\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf77bffce0320\Jean85\Version
    {
        return new \_PhpScoperf77bffce0320\Jean85\Version($packageName, \_PhpScoperf77bffce0320\PackageVersions\Versions::getVersion($packageName));
    }
}
