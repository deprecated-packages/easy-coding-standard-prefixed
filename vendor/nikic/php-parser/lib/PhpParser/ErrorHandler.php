<?php

declare (strict_types=1);
namespace _PhpScoperf3f1be0d8a30\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperf3f1be0d8a30\PhpParser\Error $error);
}
