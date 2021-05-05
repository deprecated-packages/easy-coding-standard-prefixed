<?php

declare (strict_types=1);
namespace _PhpScoperef2f7aa3581e\Jean85\Exception;

class ProvidedPackageException extends \Exception implements \_PhpScoperef2f7aa3581e\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScoperef2f7aa3581e\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is provided, probably a metapackage');
    }
}
