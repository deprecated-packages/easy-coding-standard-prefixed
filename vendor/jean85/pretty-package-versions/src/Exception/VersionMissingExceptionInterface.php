<?php

declare (strict_types=1);
namespace _PhpScoper2dc059b3a969\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
