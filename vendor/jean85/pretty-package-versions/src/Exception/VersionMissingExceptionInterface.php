<?php

declare (strict_types=1);
namespace _PhpScoper22e359cd1ab0\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
