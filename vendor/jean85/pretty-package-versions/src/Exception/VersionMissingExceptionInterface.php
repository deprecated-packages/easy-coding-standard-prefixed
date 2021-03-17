<?php

declare (strict_types=1);
namespace _PhpScoper246d3630afdd\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
