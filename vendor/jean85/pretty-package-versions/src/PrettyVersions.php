<?php

namespace _PhpScoperc75fd40d7a6e\Jean85;

use _PhpScoperc75fd40d7a6e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc75fd40d7a6e\Jean85\Version
    {
        return new \_PhpScoperc75fd40d7a6e\Jean85\Version($packageName, \_PhpScoperc75fd40d7a6e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc75fd40d7a6e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc75fd40d7a6e\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc75fd40d7a6e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
