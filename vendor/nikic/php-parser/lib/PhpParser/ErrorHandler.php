<?php

declare (strict_types=1);
namespace _PhpScoper7312d63d356f\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper7312d63d356f\PhpParser\Error $error);
}
