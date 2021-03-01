<?php

declare (strict_types=1);
namespace _PhpScoper06c5fb6c14ed\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper06c5fb6c14ed\PhpParser\Error $error);
}
