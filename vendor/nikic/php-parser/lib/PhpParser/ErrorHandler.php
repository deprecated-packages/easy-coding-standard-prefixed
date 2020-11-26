<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperb2e2c0c42e71\PhpParser\Error $error);
}
