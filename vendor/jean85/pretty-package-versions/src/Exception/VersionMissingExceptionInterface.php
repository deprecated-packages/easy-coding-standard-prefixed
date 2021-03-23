<?php

declare (strict_types=1);
namespace _PhpScoper5e93f39f19fe\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
