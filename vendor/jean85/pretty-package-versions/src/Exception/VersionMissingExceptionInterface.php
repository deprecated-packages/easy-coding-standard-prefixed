<?php

declare (strict_types=1);
namespace _PhpScoper5f6e904600e7\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
