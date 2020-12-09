<?php

declare (strict_types=1);
namespace _PhpScoper9b9ddfd01528\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper9b9ddfd01528\PhpParser\Error $error);
}
