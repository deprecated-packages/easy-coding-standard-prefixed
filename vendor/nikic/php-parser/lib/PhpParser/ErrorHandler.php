<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperbcc0395698f8\PhpParser\Error $error);
}
