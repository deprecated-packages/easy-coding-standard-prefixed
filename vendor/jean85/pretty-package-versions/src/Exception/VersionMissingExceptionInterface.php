<?php

declare (strict_types=1);
namespace _PhpScopera658fe86acec\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
