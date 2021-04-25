<?php

declare (strict_types=1);
namespace _PhpScoper96c81c3c1716\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
