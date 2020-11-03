<?php

namespace _PhpScoperaad82bb90a86\Jean85;

use _PhpScoperaad82bb90a86\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperaad82bb90a86\Jean85\Version
    {
        return new \_PhpScoperaad82bb90a86\Jean85\Version($packageName, \_PhpScoperaad82bb90a86\PackageVersions\Versions::getVersion($packageName));
    }
}
