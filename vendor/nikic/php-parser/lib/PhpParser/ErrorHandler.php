<?php

declare (strict_types=1);
namespace _PhpScoper4a718ec9156e\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper4a718ec9156e\PhpParser\Error $error);
}
