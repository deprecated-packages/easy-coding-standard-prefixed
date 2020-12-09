<?php

declare (strict_types=1);
namespace _PhpScoperf65af7a6d9a0\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperf65af7a6d9a0\PhpParser\Error $error);
}
