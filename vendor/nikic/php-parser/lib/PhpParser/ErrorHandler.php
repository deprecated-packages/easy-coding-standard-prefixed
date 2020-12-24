<?php

declare (strict_types=1);
namespace _PhpScopere106f9fd4493\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScopere106f9fd4493\PhpParser\Error $error);
}
