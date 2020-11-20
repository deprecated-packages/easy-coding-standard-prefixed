<?php

declare (strict_types=1);
namespace _PhpScoper5a9febfbbe05\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper5a9febfbbe05\PhpParser\Error $error);
}
