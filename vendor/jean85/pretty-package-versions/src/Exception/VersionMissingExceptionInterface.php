<?php

declare (strict_types=1);
namespace _PhpScoper45e499ef5890\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
