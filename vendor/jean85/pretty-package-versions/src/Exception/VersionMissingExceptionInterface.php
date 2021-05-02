<?php

declare (strict_types=1);
namespace _PhpScoperb5b1090524db\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
