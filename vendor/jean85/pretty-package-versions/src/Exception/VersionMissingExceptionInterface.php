<?php

declare (strict_types=1);
namespace _PhpScoper0c575b5c37d7\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
