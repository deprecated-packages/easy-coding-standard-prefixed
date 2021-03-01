<?php

declare (strict_types=1);
namespace _PhpScoperf3dc21757def\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperf3dc21757def\PhpParser\Error $error);
}
