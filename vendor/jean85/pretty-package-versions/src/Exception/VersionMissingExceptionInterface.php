<?php

declare (strict_types=1);
namespace _PhpScoperd2a667bd5a98\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
