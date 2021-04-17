<?php

declare (strict_types=1);
namespace _PhpScoper45e1bde0f567\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
