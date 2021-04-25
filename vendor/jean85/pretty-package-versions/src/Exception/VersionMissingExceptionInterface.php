<?php

declare (strict_types=1);
namespace _PhpScoper27cac5a8b4ab\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
