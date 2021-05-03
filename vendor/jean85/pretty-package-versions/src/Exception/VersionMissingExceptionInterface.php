<?php

declare (strict_types=1);
namespace _PhpScoper91c59a2f52e1\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
