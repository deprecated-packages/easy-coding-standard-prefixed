<?php

declare (strict_types=1);
namespace _PhpScoper000f93dc572d\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
