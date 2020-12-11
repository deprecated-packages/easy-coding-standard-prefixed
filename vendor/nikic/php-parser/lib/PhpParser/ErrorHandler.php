<?php

declare (strict_types=1);
namespace _PhpScopere4fa57261c04\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScopere4fa57261c04\PhpParser\Error $error);
}
