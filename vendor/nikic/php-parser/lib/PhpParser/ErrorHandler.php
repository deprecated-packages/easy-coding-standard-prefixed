<?php

declare (strict_types=1);
namespace _PhpScoper6d28bdf6a7f9\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper6d28bdf6a7f9\PhpParser\Error $error);
}
