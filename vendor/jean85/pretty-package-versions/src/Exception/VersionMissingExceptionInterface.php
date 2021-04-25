<?php

declare (strict_types=1);
namespace _PhpScoper4f608e7525a4\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
