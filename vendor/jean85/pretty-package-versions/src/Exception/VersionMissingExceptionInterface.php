<?php

declare (strict_types=1);
namespace _PhpScoper917c99b6aa4c\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
