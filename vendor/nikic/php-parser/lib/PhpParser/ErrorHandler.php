<?php

declare (strict_types=1);
namespace _PhpScoperf7b66f9e3817\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperf7b66f9e3817\PhpParser\Error $error);
}
