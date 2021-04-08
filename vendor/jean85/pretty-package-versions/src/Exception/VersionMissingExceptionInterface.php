<?php

declare (strict_types=1);
namespace _PhpScopera909b9d9be2e\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
