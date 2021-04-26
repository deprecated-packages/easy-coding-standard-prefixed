<?php

declare (strict_types=1);
namespace _PhpScoper4575b9150b52\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
