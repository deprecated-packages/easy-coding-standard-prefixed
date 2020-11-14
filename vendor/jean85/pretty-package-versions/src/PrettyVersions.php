<?php

namespace _PhpScoperb09c3ec8e01a\Jean85;

use _PhpScoperb09c3ec8e01a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb09c3ec8e01a\Jean85\Version
    {
        return new \_PhpScoperb09c3ec8e01a\Jean85\Version($packageName, \_PhpScoperb09c3ec8e01a\PackageVersions\Versions::getVersion($packageName));
    }
}
