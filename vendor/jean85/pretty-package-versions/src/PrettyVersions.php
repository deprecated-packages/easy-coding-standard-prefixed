<?php

namespace _PhpScoper326af2119eba\Jean85;

use _PhpScoper326af2119eba\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper326af2119eba\Jean85\Version
    {
        return new \_PhpScoper326af2119eba\Jean85\Version($packageName, \_PhpScoper326af2119eba\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper326af2119eba\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper326af2119eba\Jean85\Version
    {
        return self::getVersion(\_PhpScoper326af2119eba\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
