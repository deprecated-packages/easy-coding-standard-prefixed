<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScopercb576ca159b5\PhpParser\Error $error);
}
