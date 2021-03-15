<?php

declare (strict_types=1);
namespace _PhpScoper64e7ad844899\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
