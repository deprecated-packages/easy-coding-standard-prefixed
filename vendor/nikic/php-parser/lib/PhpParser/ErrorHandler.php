<?php

declare (strict_types=1);
namespace _PhpScoperb730595bc9f4\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperb730595bc9f4\PhpParser\Error $error);
}
