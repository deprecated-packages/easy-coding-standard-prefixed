<?php

declare (strict_types=1);
namespace _PhpScoper8ca6426d4e0c\Jean85\Exception;

class ReplacedPackageException extends \Exception implements \_PhpScoper8ca6426d4e0c\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScoper8ca6426d4e0c\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is replaced by some other package');
    }
}
