<?php

namespace _PhpScoper5928e324b45e\Jean85;

use _PhpScoper5928e324b45e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper5928e324b45e\Jean85\Version
    {
        return new \_PhpScoper5928e324b45e\Jean85\Version($packageName, \_PhpScoper5928e324b45e\PackageVersions\Versions::getVersion($packageName));
    }
}
