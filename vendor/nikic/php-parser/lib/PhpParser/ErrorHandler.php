<?php

declare (strict_types=1);
namespace _PhpScoper10b1b2c5ca55\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper10b1b2c5ca55\PhpParser\Error $error);
}
