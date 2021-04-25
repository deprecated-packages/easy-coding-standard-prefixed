<?php

declare (strict_types=1);
namespace _PhpScoper5686a261d89c\Jean85\Exception;

class ProvidedPackageException extends \Exception implements \_PhpScoper5686a261d89c\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScoper5686a261d89c\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is provided, probably a metapackage');
    }
}
