<?php

declare (strict_types=1);
namespace _PhpScoper5ca2d8bcb02c\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper5ca2d8bcb02c\PhpParser\Error $error);
}
