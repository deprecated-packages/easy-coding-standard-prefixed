<?php

declare (strict_types=1);
namespace _PhpScoper9acecd3612c5\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
