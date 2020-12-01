<?php

declare (strict_types=1);
namespace _PhpScoper96382aaac118\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper96382aaac118\PhpParser\Error $error);
}
