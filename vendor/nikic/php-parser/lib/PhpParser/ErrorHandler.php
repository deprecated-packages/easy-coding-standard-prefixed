<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperb73f9e44f4eb\PhpParser\Error $error);
}
