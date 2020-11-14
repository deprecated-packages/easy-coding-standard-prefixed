<?php

namespace _PhpScopercda2b863d098\Jean85;

use _PhpScopercda2b863d098\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopercda2b863d098\Jean85\Version
    {
        return new \_PhpScopercda2b863d098\Jean85\Version($packageName, \_PhpScopercda2b863d098\PackageVersions\Versions::getVersion($packageName));
    }
}
