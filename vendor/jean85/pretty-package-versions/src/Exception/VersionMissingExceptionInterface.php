<?php

declare (strict_types=1);
namespace _PhpScoperb0c6500a504c\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
