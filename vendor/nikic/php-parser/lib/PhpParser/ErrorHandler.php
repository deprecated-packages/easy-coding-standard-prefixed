<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperddde3ba4aebc\PhpParser\Error $error);
}
