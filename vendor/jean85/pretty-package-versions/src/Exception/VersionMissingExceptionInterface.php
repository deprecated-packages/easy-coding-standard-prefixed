<?php

declare (strict_types=1);
namespace _PhpScopera3425146d487\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
