<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperba5852cc6147\PhpParser\Error $error);
}
