<?php

declare (strict_types=1);
namespace _PhpScoper6ae4c4f86624\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
