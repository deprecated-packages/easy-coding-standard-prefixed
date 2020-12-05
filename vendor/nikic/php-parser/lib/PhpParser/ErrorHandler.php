<?php

declare (strict_types=1);
namespace _PhpScoper59ccd3f8e121\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper59ccd3f8e121\PhpParser\Error $error);
}
