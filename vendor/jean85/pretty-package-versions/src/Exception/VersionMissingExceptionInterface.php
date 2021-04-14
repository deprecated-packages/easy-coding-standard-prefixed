<?php

declare (strict_types=1);
namespace _PhpScoper7b319b4d8e1c\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
