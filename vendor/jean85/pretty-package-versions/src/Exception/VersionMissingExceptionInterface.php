<?php

declare (strict_types=1);
namespace _PhpScoper3d66e802e797\Jean85\Exception;

interface VersionMissingExceptionInterface extends \Throwable
{
    public static function create(string $packageName) : self;
}
