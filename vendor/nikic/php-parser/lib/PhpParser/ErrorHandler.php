<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperac4e86be08e5\PhpParser\Error $error);
}
