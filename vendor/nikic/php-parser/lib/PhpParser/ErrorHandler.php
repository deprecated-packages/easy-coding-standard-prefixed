<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperfab1bfb7ec99\PhpParser\Error $error);
}
