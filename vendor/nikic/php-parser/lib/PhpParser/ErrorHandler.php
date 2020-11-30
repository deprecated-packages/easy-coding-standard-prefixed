<?php

declare (strict_types=1);
namespace _PhpScoper2637e9a72c68\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper2637e9a72c68\PhpParser\Error $error);
}
