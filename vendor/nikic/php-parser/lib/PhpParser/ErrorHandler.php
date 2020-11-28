<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperfcce67077a55\PhpParser\Error $error);
}
