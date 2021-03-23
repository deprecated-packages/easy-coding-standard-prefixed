<?php

declare (strict_types=1);
namespace _PhpScoperf523baae4f87\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
