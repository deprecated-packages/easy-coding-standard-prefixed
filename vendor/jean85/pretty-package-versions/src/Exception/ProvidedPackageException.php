<?php

declare (strict_types=1);
namespace _PhpScoper3c4e863e8a34\Jean85\Exception;

class ProvidedPackageException extends \Exception implements \_PhpScoper3c4e863e8a34\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScoper3c4e863e8a34\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is provided, probably a metapackage');
    }
}
