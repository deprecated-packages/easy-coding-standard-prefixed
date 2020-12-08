<?php

declare (strict_types=1);
namespace _PhpScoperf053e888b664\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperf053e888b664\PhpParser\Error $error);
}
