<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScopera061b8a47e36\PhpParser\Error $error);
}
