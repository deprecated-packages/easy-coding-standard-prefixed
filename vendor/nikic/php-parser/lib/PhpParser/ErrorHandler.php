<?php

declare (strict_types=1);
namespace _PhpScoperd74b3ed28382\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperd74b3ed28382\PhpParser\Error $error);
}
