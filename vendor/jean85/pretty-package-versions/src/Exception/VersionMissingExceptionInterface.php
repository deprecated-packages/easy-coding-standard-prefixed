<?php

declare (strict_types=1);
namespace _PhpScoper8163b0b2b8f3\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
