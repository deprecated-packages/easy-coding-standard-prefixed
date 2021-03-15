<?php

declare (strict_types=1);
namespace _PhpScoper971ef29294dd\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
