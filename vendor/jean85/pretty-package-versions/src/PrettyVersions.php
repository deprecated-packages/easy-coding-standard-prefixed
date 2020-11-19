<?php

namespace _PhpScoper63567e560066\Jean85;

use _PhpScoper63567e560066\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper63567e560066\Jean85\Version
    {
        return new \_PhpScoper63567e560066\Jean85\Version($packageName, \_PhpScoper63567e560066\PackageVersions\Versions::getVersion($packageName));
    }
}
