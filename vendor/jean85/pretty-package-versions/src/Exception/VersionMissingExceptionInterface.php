<?php

declare (strict_types=1);
namespace _PhpScoper3fd2fa23bf53\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
