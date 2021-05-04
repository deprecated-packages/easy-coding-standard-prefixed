<?php

declare (strict_types=1);
namespace _PhpScoperc7a2896cc805\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
