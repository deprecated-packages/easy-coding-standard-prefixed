<?php

declare (strict_types=1);
namespace _PhpScoperf5c57eca8aae\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
