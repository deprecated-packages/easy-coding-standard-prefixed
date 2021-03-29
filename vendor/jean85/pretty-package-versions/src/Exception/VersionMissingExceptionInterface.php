<?php

declare (strict_types=1);
namespace _PhpScoper5e5c2222758f\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
