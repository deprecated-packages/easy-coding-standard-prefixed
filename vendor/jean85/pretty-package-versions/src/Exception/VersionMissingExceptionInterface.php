<?php

declare (strict_types=1);
namespace _PhpScoper78e1a27e740b\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
