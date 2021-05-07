<?php

declare (strict_types=1);
namespace _PhpScopercae9e6ab5cea\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
