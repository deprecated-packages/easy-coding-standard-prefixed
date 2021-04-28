<?php

declare (strict_types=1);
namespace _PhpScoper2d11f18408ea\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
