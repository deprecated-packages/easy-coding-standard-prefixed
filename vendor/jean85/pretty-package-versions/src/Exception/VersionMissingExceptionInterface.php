<?php

declare (strict_types=1);
namespace _PhpScoper08fb1f8a2f44\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
