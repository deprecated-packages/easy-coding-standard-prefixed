<?php

declare (strict_types=1);
namespace _PhpScoper82aa0193482e\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
