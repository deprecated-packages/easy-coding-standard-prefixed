<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper3d6b50c3ca2f\PhpParser\Error $error);
}
