<?php

declare (strict_types=1);
namespace _PhpScoper1c0f546920a5\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
