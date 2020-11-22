<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperbc5235eb86f3\PhpParser\Error $error);
}
