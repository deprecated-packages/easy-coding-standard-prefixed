<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScopera88a8b9f064a\PhpParser\Error $error);
}
