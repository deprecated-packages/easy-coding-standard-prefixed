<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperb83706991c7f\PhpParser\Error $error);
}
