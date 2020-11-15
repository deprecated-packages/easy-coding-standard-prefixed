<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper49c742f5a4ee\PhpParser\Error $error);
}
