<?php

declare (strict_types=1);
namespace _PhpScoper1b2f8b9c0339\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
