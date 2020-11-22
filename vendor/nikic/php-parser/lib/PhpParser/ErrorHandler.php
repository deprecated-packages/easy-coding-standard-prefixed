<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperc5bee3a837bb\PhpParser\Error $error);
}
