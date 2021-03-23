<?php

declare (strict_types=1);
namespace _PhpScoper488221d5cc83\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
