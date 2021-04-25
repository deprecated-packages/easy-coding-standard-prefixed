<?php

declare (strict_types=1);
namespace _PhpScoper6b1da46bea54\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
