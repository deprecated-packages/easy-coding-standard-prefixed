<?php

declare (strict_types=1);
namespace _PhpScoper0c0702cca4ac\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
