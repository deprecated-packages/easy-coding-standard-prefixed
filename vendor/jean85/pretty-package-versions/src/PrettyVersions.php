<?php

namespace _PhpScoperb383f16e851e\Jean85;

use _PhpScoperb383f16e851e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb383f16e851e\Jean85\Version
    {
        return new \_PhpScoperb383f16e851e\Jean85\Version($packageName, \_PhpScoperb383f16e851e\PackageVersions\Versions::getVersion($packageName));
    }
}
