<?php

declare (strict_types=1);
namespace _PhpScoper4fedb9aa1e5f\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
