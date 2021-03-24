<?php

declare (strict_types=1);
namespace _PhpScoperc98ae2003489\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
