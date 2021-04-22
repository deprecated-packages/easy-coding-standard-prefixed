<?php

declare (strict_types=1);
namespace _PhpScoper9907e2e69ce3\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
