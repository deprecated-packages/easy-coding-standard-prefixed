<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperaad82bb90a86\PhpParser\Error $error);
}
