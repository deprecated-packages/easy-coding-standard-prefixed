<?php

declare (strict_types=1);
namespace _PhpScoper82a1412fb847\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
