<?php

declare (strict_types=1);
namespace _PhpScopereb9508917a55\Jean85\Exception;

class ReplacedPackageException extends \Exception implements \_PhpScopereb9508917a55\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScopereb9508917a55\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is replaced by some other package');
    }
}
