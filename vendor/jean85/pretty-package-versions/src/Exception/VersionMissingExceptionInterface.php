<?php

declare (strict_types=1);
namespace _PhpScopera22bb3f4d7b7\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
