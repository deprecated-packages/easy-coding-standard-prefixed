<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperdc8fbcd7c69d\PhpParser\Error $error);
}
