<?php

declare (strict_types=1);
namespace _PhpScoper356bfb655d08\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
