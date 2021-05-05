<?php

declare (strict_types=1);
namespace _PhpScoper6d453419d16a\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
