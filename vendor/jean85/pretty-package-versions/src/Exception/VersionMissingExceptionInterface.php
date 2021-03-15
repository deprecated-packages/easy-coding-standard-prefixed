<?php

declare (strict_types=1);
namespace _PhpScoper8a7636b3fdaf\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
