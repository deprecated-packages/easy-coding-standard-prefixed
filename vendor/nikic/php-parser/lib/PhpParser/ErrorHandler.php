<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperba24099fc6fd\PhpParser\Error $error);
}
