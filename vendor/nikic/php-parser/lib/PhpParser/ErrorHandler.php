<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper3e1e0e5bb8ef\PhpParser\Error $error);
}
