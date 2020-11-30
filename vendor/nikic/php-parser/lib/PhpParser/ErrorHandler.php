<?php

declare (strict_types=1);
namespace _PhpScoper246d7c16d32f\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper246d7c16d32f\PhpParser\Error $error);
}
