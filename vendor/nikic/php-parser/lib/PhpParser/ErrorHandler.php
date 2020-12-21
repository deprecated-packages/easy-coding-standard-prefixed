<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperfcf15c26e033\PhpParser\Error $error);
}
