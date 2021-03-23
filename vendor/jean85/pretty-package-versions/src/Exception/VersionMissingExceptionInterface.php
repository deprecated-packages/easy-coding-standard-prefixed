<?php

declare (strict_types=1);
namespace _PhpScoper35ec99c463ee\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
