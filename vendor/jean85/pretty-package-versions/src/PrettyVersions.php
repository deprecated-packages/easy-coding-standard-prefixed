<?php

declare (strict_types=1);
namespace _PhpScoperf5c57eca8aae\Jean85;

use Composer\InstalledVersions;
use _PhpScoperf5c57eca8aae\Jean85\Exception\ProvidedPackageException;
use _PhpScoperf5c57eca8aae\Jean85\Exception\ReplacedPackageException;
use _PhpScoperf5c57eca8aae\Jean85\Exception\VersionMissingExceptionInterface;
class PrettyVersions
{
    /**
     * @throws VersionMissingExceptionInterface When a package is provided ({@see ProvidedPackageException}) or replaced ({@see ReplacedPackageException})
     */
    public static function getVersion(string $packageName) : \_PhpScoperf5c57eca8aae\Jean85\Version
    {
        if (isset(\Composer\InstalledVersions::getRawData()['versions'][$packageName]['provided'])) {
            throw \_PhpScoperf5c57eca8aae\Jean85\Exception\ProvidedPackageException::create($packageName);
        }
        if (isset(\Composer\InstalledVersions::getRawData()['versions'][$packageName]['replaced'])) {
            throw \_PhpScoperf5c57eca8aae\Jean85\Exception\ReplacedPackageException::create($packageName);
        }
        return new \_PhpScoperf5c57eca8aae\Jean85\Version($packageName, \Composer\InstalledVersions::getPrettyVersion($packageName), \Composer\InstalledVersions::getReference($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \Composer\InstalledVersions::getRootPackage()['name'];
    }
    public static function getRootPackageVersion() : \_PhpScoperf5c57eca8aae\Jean85\Version
    {
        return new \_PhpScoperf5c57eca8aae\Jean85\Version(self::getRootPackageName(), \Composer\InstalledVersions::getRootPackage()['pretty_version'], \Composer\InstalledVersions::getRootPackage()['reference']);
    }
}
