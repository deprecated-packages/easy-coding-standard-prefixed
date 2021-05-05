<?php

declare (strict_types=1);
namespace _PhpScoper7e6a1331d94a\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
