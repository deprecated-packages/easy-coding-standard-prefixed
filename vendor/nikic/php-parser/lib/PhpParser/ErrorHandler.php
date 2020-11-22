<?php

declare (strict_types=1);
namespace _PhpScoperf3db63c305b2\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperf3db63c305b2\PhpParser\Error $error);
}
