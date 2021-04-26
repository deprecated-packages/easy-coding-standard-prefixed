<?php

declare (strict_types=1);
namespace _PhpScoper917c99b6aa4c\Jean85\Exception;

class ReplacedPackageException extends \Exception implements \_PhpScoper917c99b6aa4c\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScoper917c99b6aa4c\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is replaced by some other package');
    }
}
