<?php

declare (strict_types=1);
namespace ECSPrefix20210507\Jean85\Exception;

class ReplacedPackageException extends \Exception implements \ECSPrefix20210507\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \ECSPrefix20210507\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is replaced by some other package');
    }
}
