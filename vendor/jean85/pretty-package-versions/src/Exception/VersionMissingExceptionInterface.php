<?php

declare (strict_types=1);
namespace _PhpScoper130a9a1cd4a2\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
