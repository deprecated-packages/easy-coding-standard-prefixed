<?php

declare (strict_types=1);
namespace _PhpScoperc7096eb2567d\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
