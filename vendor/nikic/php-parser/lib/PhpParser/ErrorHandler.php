<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperb09c3ec8e01a\PhpParser\Error $error);
}
