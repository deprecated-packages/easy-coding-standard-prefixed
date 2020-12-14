<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperc64a4ac1af35\PhpParser\Error $error);
}
