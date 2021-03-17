<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper842c7347e6be\PhpParser\Error $error);
}
