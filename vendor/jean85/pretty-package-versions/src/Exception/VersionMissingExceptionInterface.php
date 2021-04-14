<?php

declare (strict_types=1);
namespace _PhpScopercc9aec205203\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
