<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperad4b7e2c09d8\PhpParser\Error $error);
}
