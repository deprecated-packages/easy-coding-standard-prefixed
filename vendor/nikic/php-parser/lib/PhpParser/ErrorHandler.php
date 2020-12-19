<?php

declare (strict_types=1);
namespace _PhpScoper8b97b0dd6f5b\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper8b97b0dd6f5b\PhpParser\Error $error);
}
