<?php

declare (strict_types=1);
namespace _PhpScoperc5e9eb67638f\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
