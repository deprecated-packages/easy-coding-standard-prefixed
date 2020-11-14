<?php

namespace _PhpScoperddde3ba4aebc\Jean85;

use _PhpScoperddde3ba4aebc\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperddde3ba4aebc\Jean85\Version
    {
        return new \_PhpScoperddde3ba4aebc\Jean85\Version($packageName, \_PhpScoperddde3ba4aebc\PackageVersions\Versions::getVersion($packageName));
    }
}
