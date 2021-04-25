<?php

declare (strict_types=1);
namespace _PhpScoper5686a261d89c\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
