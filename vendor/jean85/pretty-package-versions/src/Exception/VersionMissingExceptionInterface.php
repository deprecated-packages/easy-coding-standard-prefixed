<?php

declare (strict_types=1);
namespace _PhpScoper99c9619a6243\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
