<?php

namespace ECSPrefix20210507\Jean85;

use Composer\InstalledVersions;
use ECSPrefix20210507\Jean85\Exception\ProvidedPackageException;
use ECSPrefix20210507\Jean85\Exception\ReplacedPackageException;
use ECSPrefix20210507\Jean85\Exception\VersionMissingExceptionInterface;
class PrettyVersions
{
    /**
     * @throws VersionMissingExceptionInterface When a package is provided ({@see ProvidedPackageException}) or replaced ({@see ReplacedPackageException})
     * @param string $packageName
     * @return \ECSPrefix20210507\Jean85\Version
     */
    public static function getVersion($packageName)
    {
        if (isset(InstalledVersions::getRawData()['versions'][$packageName]['provided'])) {
            throw ProvidedPackageException::create($packageName);
        }
        if (isset(InstalledVersions::getRawData()['versions'][$packageName]['replaced'])) {
            throw ReplacedPackageException::create($packageName);
        }
        return new \ECSPrefix20210507\Jean85\Version($packageName, InstalledVersions::getPrettyVersion($packageName), InstalledVersions::getReference($packageName));
    }
    /**
     * @return string
     */
    public static function getRootPackageName()
    {
        return InstalledVersions::getRootPackage()['name'];
    }
    /**
     * @return \ECSPrefix20210507\Jean85\Version
     */
    public static function getRootPackageVersion()
    {
        return new \ECSPrefix20210507\Jean85\Version(self::getRootPackageName(), InstalledVersions::getRootPackage()['pretty_version'], InstalledVersions::getRootPackage()['reference']);
    }
}
