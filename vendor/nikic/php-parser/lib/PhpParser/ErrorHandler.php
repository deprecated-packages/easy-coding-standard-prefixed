<?php

declare (strict_types=1);
namespace _PhpScoper89c09b8e7101\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper89c09b8e7101\PhpParser\Error $error);
}
