<?php

namespace _PhpScopera9d6b451df71\Jean85;

use _PhpScopera9d6b451df71\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera9d6b451df71\Jean85\Version
    {
        return new \_PhpScopera9d6b451df71\Jean85\Version($packageName, \_PhpScopera9d6b451df71\PackageVersions\Versions::getVersion($packageName));
    }
}
