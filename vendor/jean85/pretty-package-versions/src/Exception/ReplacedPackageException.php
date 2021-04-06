<?php

declare (strict_types=1);
namespace _PhpScoperb6361033cf41\Jean85\Exception;

class ReplacedPackageException extends \Exception implements \_PhpScoperb6361033cf41\Jean85\Exception\VersionMissingExceptionInterface
{
    public static function create(string $packageName) : \_PhpScoperb6361033cf41\Jean85\Exception\VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is replaced by some other package');
    }
}
