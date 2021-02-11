<?php

declare (strict_types=1);
namespace _PhpScoperef5048aa2573\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperef5048aa2573\PhpParser\Error $error);
}
