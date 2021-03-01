<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperc4ea0f0bd23f\PhpParser\Error $error);
}
