<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperb458b528613f\PhpParser\Error $error);
}
