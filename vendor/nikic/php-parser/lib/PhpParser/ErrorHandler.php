<?php

declare (strict_types=1);
namespace _PhpScopereb8678af2407\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScopereb8678af2407\PhpParser\Error $error);
}
