<?php

namespace _PhpScoperae959d396e95\Jean85;

use _PhpScoperae959d396e95\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperae959d396e95\Jean85\Version
    {
        return new \_PhpScoperae959d396e95\Jean85\Version($packageName, \_PhpScoperae959d396e95\PackageVersions\Versions::getVersion($packageName));
    }
}
