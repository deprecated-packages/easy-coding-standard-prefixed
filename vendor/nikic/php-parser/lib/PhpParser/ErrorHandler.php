<?php

declare (strict_types=1);
namespace _PhpScoper47644ab3aa9a\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper47644ab3aa9a\PhpParser\Error $error);
}
