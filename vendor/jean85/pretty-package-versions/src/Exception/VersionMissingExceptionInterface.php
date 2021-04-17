<?php

declare (strict_types=1);
namespace _PhpScoper514703a076a2\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
