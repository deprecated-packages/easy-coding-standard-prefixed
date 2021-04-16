<?php

declare (strict_types=1);
namespace _PhpScopera22bb3f4d7b7\Jean85\Exception;

class ReplacedPackageException extends \Exception implements \_PhpScopera22bb3f4d7b7\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScopera22bb3f4d7b7\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is replaced by some other package');
    }
}
