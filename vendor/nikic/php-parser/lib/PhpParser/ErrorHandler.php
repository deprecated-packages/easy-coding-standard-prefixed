<?php

declare (strict_types=1);
namespace _PhpScoper8acb416c2f5a\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper8acb416c2f5a\PhpParser\Error $error);
}
