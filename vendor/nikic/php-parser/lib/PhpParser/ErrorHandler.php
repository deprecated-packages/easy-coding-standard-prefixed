<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperdaf95aff095b\PhpParser\Error $error);
}
