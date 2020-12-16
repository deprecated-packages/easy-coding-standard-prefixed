<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperd35c27cd4b09\PhpParser\Error $error);
}
