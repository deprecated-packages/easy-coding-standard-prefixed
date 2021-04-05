<?php

declare (strict_types=1);
namespace _PhpScoper6b644dbe715d\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
