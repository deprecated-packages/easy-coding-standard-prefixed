<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperd1a5bf00e83e\PhpParser\Error $error);
}
