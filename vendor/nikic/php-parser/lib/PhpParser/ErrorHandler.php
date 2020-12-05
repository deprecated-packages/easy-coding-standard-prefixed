<?php

declare (strict_types=1);
namespace _PhpScoperc83f84c90b60\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperc83f84c90b60\PhpParser\Error $error);
}
