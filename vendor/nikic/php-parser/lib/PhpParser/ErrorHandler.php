<?php

declare (strict_types=1);
namespace _PhpScoper83a475a0590e\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper83a475a0590e\PhpParser\Error $error);
}
