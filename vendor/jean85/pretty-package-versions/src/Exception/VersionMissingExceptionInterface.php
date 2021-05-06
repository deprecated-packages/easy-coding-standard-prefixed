<?php

declare (strict_types=1);
namespace _PhpScopera48d5dbb002d\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
