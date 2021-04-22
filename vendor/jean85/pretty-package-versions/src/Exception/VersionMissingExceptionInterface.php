<?php

declare (strict_types=1);
namespace _PhpScopera9d6a31d814c\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
