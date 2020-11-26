<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScopercb217fd4e736\PhpParser\Error $error);
}
