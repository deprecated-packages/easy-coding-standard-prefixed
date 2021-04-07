<?php

declare (strict_types=1);
namespace _PhpScoper1ed8518cf1bf\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
