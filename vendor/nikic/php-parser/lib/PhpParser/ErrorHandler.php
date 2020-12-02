<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperc95ae4bf942a\PhpParser\Error $error);
}
