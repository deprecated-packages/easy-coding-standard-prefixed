<?php

declare (strict_types=1);
namespace _PhpScoper6ffa0951a2e9\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
