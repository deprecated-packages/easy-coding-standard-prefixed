<?php

declare (strict_types=1);
namespace _PhpScoperfa7254c25e18\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperfa7254c25e18\PhpParser\Error $error);
}
