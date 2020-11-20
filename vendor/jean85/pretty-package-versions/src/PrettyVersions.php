<?php

namespace _PhpScoperc753ccca5a0c\Jean85;

use _PhpScoperc753ccca5a0c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc753ccca5a0c\Jean85\Version
    {
        return new \_PhpScoperc753ccca5a0c\Jean85\Version($packageName, \_PhpScoperc753ccca5a0c\PackageVersions\Versions::getVersion($packageName));
    }
}
