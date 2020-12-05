<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperaba240c3d5f1\PhpParser\Error $error);
}
