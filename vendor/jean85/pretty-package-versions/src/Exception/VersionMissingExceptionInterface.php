<?php

declare (strict_types=1);
namespace _PhpScoper91fe47cd7f25\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
