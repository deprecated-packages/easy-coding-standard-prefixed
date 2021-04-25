<?php

declare (strict_types=1);
namespace _PhpScoperff1e514762b4\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
