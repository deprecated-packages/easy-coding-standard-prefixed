<?php

declare (strict_types=1);
namespace _PhpScopere7e518ee6a5b\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
