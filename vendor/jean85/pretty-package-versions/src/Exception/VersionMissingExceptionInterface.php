<?php

declare (strict_types=1);
namespace _PhpScoper32abeec2fe5a\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
