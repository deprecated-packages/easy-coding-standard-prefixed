<?php

declare (strict_types=1);
namespace _PhpScoper7d3888cf4297\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
