<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperfd70a7e8e84f\PhpParser\Error $error);
}
