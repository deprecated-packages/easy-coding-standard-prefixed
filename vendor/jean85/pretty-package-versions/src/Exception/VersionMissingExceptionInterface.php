<?php

declare (strict_types=1);
namespace _PhpScoper9385100df341\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
