<?php

declare (strict_types=1);
namespace _PhpScoper446d16070175\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
