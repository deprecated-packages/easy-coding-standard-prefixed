<?php

declare (strict_types=1);
namespace _PhpScoper5f836821822a\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
