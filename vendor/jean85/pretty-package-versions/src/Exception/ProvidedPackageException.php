<?php

declare (strict_types=1);
namespace _PhpScoperb0c6500a504c\Jean85\Exception;

class ProvidedPackageException extends \Exception implements \_PhpScoperb0c6500a504c\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScoperb0c6500a504c\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is provided, probably a metapackage');
    }
}
