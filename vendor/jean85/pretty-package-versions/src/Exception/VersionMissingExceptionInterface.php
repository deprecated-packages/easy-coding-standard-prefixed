<?php

declare (strict_types=1);
namespace _PhpScoper2f04ef4e8878\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
