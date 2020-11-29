<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScopercae980ebf12d\PhpParser\Error $error);
}
