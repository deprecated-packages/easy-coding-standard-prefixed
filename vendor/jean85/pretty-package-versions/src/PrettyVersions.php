<?php

namespace _PhpScoperb6d4bd368bd9\Jean85;

use _PhpScoperb6d4bd368bd9\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb6d4bd368bd9\Jean85\Version
    {
        return new \_PhpScoperb6d4bd368bd9\Jean85\Version($packageName, \_PhpScoperb6d4bd368bd9\PackageVersions\Versions::getVersion($packageName));
    }
}
