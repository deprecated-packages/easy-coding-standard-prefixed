<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper2a8ad010dfbd\PhpParser\Error $error);
}
