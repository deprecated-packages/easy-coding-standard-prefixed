<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
