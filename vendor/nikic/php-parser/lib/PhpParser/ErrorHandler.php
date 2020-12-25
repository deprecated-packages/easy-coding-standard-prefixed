<?php

declare (strict_types=1);
namespace _PhpScoper64ca614e27fd\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper64ca614e27fd\PhpParser\Error $error);
}
