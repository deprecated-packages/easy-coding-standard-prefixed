<?php

declare (strict_types=1);
namespace _PhpScoper457dd3bd73ba\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
