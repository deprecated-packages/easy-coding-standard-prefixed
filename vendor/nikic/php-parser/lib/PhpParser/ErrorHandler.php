<?php

declare (strict_types=1);
namespace _PhpScoper11a6395266c4\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper11a6395266c4\PhpParser\Error $error);
}
