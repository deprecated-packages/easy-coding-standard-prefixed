<?php

declare (strict_types=1);
namespace _PhpScoper86aa49a51982\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
