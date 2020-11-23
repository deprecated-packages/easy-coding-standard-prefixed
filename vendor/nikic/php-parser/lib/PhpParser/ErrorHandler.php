<?php

declare (strict_types=1);
namespace _PhpScoperd4c5032f0671\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperd4c5032f0671\PhpParser\Error $error);
}
