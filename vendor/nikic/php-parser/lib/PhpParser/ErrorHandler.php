<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperd4937ee9b515\PhpParser\Error $error);
}
