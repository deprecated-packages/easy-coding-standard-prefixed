<?php

namespace _PhpScoperecb978830f1e\Jean85;

use _PhpScoperecb978830f1e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperecb978830f1e\Jean85\Version
    {
        return new \_PhpScoperecb978830f1e\Jean85\Version($packageName, \_PhpScoperecb978830f1e\PackageVersions\Versions::getVersion($packageName));
    }
}
