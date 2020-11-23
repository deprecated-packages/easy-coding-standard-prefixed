<?php

declare (strict_types=1);
namespace _PhpScoper7b8580219c59\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper7b8580219c59\PhpParser\Error $error);
}
