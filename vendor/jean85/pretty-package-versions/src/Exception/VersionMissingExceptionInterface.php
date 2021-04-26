<?php

declare (strict_types=1);
namespace _PhpScoper8a1ea80774eb\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
