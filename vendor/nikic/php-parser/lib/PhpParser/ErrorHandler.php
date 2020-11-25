<?php

declare (strict_types=1);
namespace _PhpScoper38a7d00685f8\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper38a7d00685f8\PhpParser\Error $error);
}
