<?php

declare (strict_types=1);
namespace _PhpScoper13160cf3462c\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper13160cf3462c\PhpParser\Error $error);
}
