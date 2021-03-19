<?php

declare (strict_types=1);
namespace _PhpScoperd47a2fa2a77e\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
