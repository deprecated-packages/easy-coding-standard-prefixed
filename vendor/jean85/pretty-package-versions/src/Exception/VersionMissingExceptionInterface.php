<?php

declare (strict_types=1);
namespace _PhpScoperef2f7aa3581e\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
