<?php

declare (strict_types=1);
namespace _PhpScoper3d66e802e797\Jean85\Exception;

class ProvidedPackageException extends \Exception implements \_PhpScoper3d66e802e797\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScoper3d66e802e797\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is provided, probably a metapackage');
    }
}
