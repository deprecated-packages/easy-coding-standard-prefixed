<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperdf6a0b341030\PhpParser\Error $error);
}
