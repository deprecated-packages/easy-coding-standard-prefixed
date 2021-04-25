<?php

declare (strict_types=1);
namespace _PhpScoper2737ffe13a7b\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
