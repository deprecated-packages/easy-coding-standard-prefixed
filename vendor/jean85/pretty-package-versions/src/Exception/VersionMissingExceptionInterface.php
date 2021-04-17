<?php

declare (strict_types=1);
namespace _PhpScoper757c066053f8\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
