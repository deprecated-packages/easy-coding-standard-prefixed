<?php

declare (strict_types=1);
namespace _PhpScoperd51690aa3091\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
