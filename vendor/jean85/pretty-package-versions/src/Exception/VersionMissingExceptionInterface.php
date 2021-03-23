<?php

declare (strict_types=1);
namespace _PhpScoper8ca6426d4e0c\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
