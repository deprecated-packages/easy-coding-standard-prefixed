<?php

declare (strict_types=1);
namespace _PhpScoperf6b7f9bf122d\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
