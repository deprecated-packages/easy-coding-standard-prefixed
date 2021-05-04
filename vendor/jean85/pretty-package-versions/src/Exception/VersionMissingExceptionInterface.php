<?php

declare (strict_types=1);
namespace _PhpScopercfeba9d8ad31\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
