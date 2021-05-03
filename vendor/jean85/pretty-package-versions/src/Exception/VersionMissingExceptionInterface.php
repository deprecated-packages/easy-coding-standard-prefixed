<?php

declare (strict_types=1);
namespace _PhpScoper7239e3eaf11a\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
