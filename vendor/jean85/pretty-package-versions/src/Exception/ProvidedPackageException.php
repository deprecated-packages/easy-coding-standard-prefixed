<?php

declare (strict_types=1);
namespace _PhpScoper86aa49a51982\Jean85\Exception;

class ProvidedPackageException extends \Exception implements \_PhpScoper86aa49a51982\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScoper86aa49a51982\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is provided, probably a metapackage');
    }
}
