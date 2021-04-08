<?php

declare (strict_types=1);
namespace _PhpScoper9a024705919c\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
