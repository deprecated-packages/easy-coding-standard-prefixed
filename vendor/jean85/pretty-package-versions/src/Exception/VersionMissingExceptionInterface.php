<?php

declare (strict_types=1);
namespace _PhpScoper08686b2277af\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
