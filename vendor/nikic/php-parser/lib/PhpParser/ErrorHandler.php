<?php

declare (strict_types=1);
namespace _PhpScoper7faa8deb0d3c\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper7faa8deb0d3c\PhpParser\Error $error);
}
