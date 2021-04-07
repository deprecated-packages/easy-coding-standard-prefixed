<?php

declare (strict_types=1);
namespace _PhpScoperd8048db577a9\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
