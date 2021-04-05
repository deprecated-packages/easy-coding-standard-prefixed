<?php

declare (strict_types=1);
namespace _PhpScoper86aebf8cf357\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
