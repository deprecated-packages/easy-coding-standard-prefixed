<?php

declare (strict_types=1);
namespace _PhpScoperfde42a25c345\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
