<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperfcee700af3df\PhpParser\Error $error);
}
