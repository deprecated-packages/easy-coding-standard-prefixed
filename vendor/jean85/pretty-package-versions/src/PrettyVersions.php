<?php

namespace _PhpScoper279cf54b77ad\Jean85;

use _PhpScoper279cf54b77ad\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper279cf54b77ad\Jean85\Version
    {
        return new \_PhpScoper279cf54b77ad\Jean85\Version($packageName, \_PhpScoper279cf54b77ad\PackageVersions\Versions::getVersion($packageName));
    }
}
