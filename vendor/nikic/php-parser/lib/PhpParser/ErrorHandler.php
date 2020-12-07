<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperda2604e33acb\PhpParser\Error $error);
}
