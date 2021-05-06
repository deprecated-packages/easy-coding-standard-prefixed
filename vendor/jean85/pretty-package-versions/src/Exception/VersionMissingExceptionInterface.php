<?php

declare (strict_types=1);
namespace _PhpScoper3c4e863e8a34\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
