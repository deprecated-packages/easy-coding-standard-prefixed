<?php

declare (strict_types=1);
namespace _PhpScoper4aefa5ecccc4\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
