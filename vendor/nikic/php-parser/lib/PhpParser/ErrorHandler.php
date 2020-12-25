<?php

declare (strict_types=1);
namespace _PhpScoperb44a315fec16\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperb44a315fec16\PhpParser\Error $error);
}
