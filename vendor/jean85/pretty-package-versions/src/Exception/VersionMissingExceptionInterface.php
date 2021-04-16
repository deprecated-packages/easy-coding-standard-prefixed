<?php

declare (strict_types=1);
namespace _PhpScoper1ddca3f92d7d\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
