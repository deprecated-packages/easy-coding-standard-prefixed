<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperedc2e0c967db\PhpParser\Error $error);
}
