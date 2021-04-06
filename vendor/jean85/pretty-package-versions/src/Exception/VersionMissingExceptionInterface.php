<?php

declare (strict_types=1);
namespace _PhpScoperb6361033cf41\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
