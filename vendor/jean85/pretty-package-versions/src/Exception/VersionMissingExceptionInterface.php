<?php

declare (strict_types=1);
namespace _PhpScopercd2fc5ef50ef\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
