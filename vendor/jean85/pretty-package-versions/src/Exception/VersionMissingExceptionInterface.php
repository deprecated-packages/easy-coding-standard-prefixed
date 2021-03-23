<?php

declare (strict_types=1);
namespace _PhpScoper70d1796231ae\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
