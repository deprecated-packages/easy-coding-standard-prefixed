<?php

declare (strict_types=1);
namespace _PhpScoper855b7fb41c61\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
