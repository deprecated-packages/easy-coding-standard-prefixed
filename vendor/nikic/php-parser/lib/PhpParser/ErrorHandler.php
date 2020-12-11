<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperb26833cc184d\PhpParser\Error $error);
}
