<?php

declare (strict_types=1);
namespace _PhpScoperc2b2a9bb0e13\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
