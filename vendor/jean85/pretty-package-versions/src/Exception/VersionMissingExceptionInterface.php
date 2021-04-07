<?php

declare (strict_types=1);
namespace _PhpScoper6a8174766bf7\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
