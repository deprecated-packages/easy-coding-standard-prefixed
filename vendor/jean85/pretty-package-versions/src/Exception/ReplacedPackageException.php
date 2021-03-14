<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\Jean85\Exception;

class ReplacedPackageException extends \Exception implements \_PhpScopera1f11cc38772\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScopera1f11cc38772\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is replaced by some other package');
    }
}
