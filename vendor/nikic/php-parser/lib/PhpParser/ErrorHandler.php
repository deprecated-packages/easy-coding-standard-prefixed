<?php

declare (strict_types=1);
namespace _PhpScoper8a7636b3fdaf\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper8a7636b3fdaf\PhpParser\Error $error);
}
