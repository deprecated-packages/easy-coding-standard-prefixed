<?php

declare (strict_types=1);
namespace _PhpScoperf53473b45c36\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
