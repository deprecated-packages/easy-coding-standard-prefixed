<?php

declare (strict_types=1);
namespace _PhpScoperf53473b45c36\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperf53473b45c36\PhpParser\Error $error);
}
