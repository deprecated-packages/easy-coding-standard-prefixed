<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperc4b135661b3a\PhpParser\Error $error);
}
