<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperf361a7d70552\PhpParser\Error $error);
}
