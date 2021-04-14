<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Composer;

use _PhpScoperd8b0b9452568\Jean85\Exception\ReplacedPackageException;
use _PhpScoperd8b0b9452568\Jean85\PrettyVersions;
use _PhpScoperd8b0b9452568\Jean85\Version;
use OutOfBoundsException;
use _PhpScoperd8b0b9452568\PharIo\Version\InvalidVersionException;
final class PackageVersionProvider
{
    /**
     * Returns current version of package, contains only major and minor.
     */
    public function provide(string $packageName) : string
    {
        try {
            $version = $this->getVersion($packageName, 'symplify/symplify');
            return $version->getPrettyVersion();
        } catch (\OutOfBoundsException|\_PhpScoperd8b0b9452568\PharIo\Version\InvalidVersionException $exceptoin) {
            return 'Unknown';
        }
    }
    /**
     * Workaround for when the required package is executed in the monorepo or replaced in any other way
     *
     * @see https://github.com/symplify/symplify/pull/2901#issuecomment-771536136
     * @see https://github.com/Jean85/pretty-package-versions/pull/16#issuecomment-620550459
     */
    private function getVersion(string $packageName, string $replacingPackageName) : \_PhpScoperd8b0b9452568\Jean85\Version
    {
        try {
            return \_PhpScoperd8b0b9452568\Jean85\PrettyVersions::getVersion($packageName);
        } catch (\OutOfBoundsException|\_PhpScoperd8b0b9452568\Jean85\Exception\ReplacedPackageException $exception) {
            return \_PhpScoperd8b0b9452568\Jean85\PrettyVersions::getVersion($replacingPackageName);
        }
    }
}
