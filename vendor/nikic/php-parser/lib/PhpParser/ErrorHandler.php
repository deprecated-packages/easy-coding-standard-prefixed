<?php

declare (strict_types=1);
namespace _PhpScoper3639953bb9e5\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper3639953bb9e5\PhpParser\Error $error);
}
