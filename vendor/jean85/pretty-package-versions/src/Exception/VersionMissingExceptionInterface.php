<?php

declare (strict_types=1);
namespace _PhpScoper890197fe38f7\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
