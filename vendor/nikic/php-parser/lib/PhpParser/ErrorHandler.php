<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScopera8f555a7493c\PhpParser\Error $error);
}
