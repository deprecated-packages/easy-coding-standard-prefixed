<?php

declare (strict_types=1);
namespace _PhpScoper8dd2e1c340b1\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper8dd2e1c340b1\PhpParser\Error $error);
}
