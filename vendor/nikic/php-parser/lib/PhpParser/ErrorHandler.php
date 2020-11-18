<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperf77bffce0320\PhpParser\Error $error);
}
