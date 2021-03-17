<?php

declare (strict_types=1);
namespace _PhpScopera3425146d487\Jean85\Exception;

class ProvidedPackageException extends \Exception implements \_PhpScopera3425146d487\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScopera3425146d487\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is provided, probably a metapackage');
    }
}
