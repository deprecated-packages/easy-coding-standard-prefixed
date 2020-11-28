<?php

declare (strict_types=1);
namespace _PhpScoperc8b83ee8976a\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperc8b83ee8976a\PhpParser\Error $error);
}
