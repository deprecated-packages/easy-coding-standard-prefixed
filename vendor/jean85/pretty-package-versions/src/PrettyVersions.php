<?php

declare (strict_types=1);
namespace _PhpScoper96c81c3c1716\Jean85;

use Composer\InstalledVersions;
use _PhpScoper96c81c3c1716\Jean85\Exception\ProvidedPackageException;
use _PhpScoper96c81c3c1716\Jean85\Exception\ReplacedPackageException;
use _PhpScoper96c81c3c1716\Jean85\Exception\VersionMissingExceptionInterface;
class PrettyVersions
{
    /**
     * @throws VersionMissingExceptionInterface When a package is provided ({@see ProvidedPackageException}) or replaced ({@see ReplacedPackageException})
     */
    public static function getVersion(string $packageName) : \_PhpScoper96c81c3c1716\Jean85\Version
    {
        if (isset(InstalledVersions::getRawData()['versions'][$packageName]['provided'])) {
            throw ProvidedPackageException::create($packageName);
        }
        if (isset(InstalledVersions::getRawData()['versions'][$packageName]['replaced'])) {
            throw ReplacedPackageException::create($packageName);
        }
        return new \_PhpScoper96c81c3c1716\Jean85\Version($packageName, InstalledVersions::getPrettyVersion($packageName), InstalledVersions::getReference($packageName));
    }
    public static function getRootPackageName() : string
    {
        return InstalledVersions::getRootPackage()['name'];
    }
    public static function getRootPackageVersion() : \_PhpScoper96c81c3c1716\Jean85\Version
    {
        return new \_PhpScoper96c81c3c1716\Jean85\Version(self::getRootPackageName(), InstalledVersions::getRootPackage()['pretty_version'], InstalledVersions::getRootPackage()['reference']);
    }
}
