<?php

declare (strict_types=1);
namespace _PhpScoper3c44535fe75f\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
