<?php

declare (strict_types=1);
namespace _PhpScopera609aff833be\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
