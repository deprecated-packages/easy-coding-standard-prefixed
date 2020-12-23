<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperd9fcac9e904f\PhpParser\Error $error);
}
