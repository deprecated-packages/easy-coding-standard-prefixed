<?php

declare (strict_types=1);
namespace _PhpScoper85e989d55df2\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
