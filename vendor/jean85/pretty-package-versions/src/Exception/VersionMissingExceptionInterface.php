<?php

declare (strict_types=1);
namespace _PhpScoper70e3784a2d21\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
