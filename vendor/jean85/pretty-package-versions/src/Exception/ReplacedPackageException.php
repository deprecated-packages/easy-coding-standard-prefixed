<?php

declare (strict_types=1);
namespace _PhpScopera909b9d9be2e\Jean85\Exception;

class ReplacedPackageException extends \Exception implements \_PhpScopera909b9d9be2e\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScopera909b9d9be2e\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is replaced by some other package');
    }
}
