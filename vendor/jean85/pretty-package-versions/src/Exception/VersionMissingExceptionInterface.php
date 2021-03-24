<?php

declare (strict_types=1);
namespace _PhpScopere66f4b626446\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
