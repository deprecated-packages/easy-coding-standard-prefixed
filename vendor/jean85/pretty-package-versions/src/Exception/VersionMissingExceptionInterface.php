<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
