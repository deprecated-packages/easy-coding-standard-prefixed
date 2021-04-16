<?php

declare (strict_types=1);
namespace _PhpScopereb9508917a55\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
