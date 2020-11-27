<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper578a67c80b2b\PhpParser\Error $error);
}
