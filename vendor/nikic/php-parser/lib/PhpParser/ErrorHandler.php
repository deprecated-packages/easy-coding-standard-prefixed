<?php

declare (strict_types=1);
namespace _PhpScoperad68e34a80c5\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperad68e34a80c5\PhpParser\Error $error);
}
