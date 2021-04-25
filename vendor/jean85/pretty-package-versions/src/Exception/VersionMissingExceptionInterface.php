<?php

declare (strict_types=1);
namespace _PhpScoper8b3c9ad56565\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
