<?php

declare (strict_types=1);
namespace _PhpScoperd2a667bd5a98\Jean85\Exception;

class ReplacedPackageException extends \Exception implements \_PhpScoperd2a667bd5a98\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScoperd2a667bd5a98\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is replaced by some other package');
    }
}
