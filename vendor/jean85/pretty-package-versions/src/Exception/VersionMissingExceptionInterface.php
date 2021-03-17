<?php

declare (strict_types=1);
namespace _PhpScoper4e2df00556a9\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
