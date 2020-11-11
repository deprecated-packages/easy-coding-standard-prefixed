<?php

namespace _PhpScoper2fe14d6302bc\Jean85;

use _PhpScoper2fe14d6302bc\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper2fe14d6302bc\Jean85\Version
    {
        return new \_PhpScoper2fe14d6302bc\Jean85\Version($packageName, \_PhpScoper2fe14d6302bc\PackageVersions\Versions::getVersion($packageName));
    }
}
