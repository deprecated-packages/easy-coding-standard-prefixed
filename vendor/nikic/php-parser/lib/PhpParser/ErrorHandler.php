<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperd9c3b46af121\PhpParser\Error $error);
}
