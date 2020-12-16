<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoperc75fd40d7a6e\PhpParser\Error $error);
}
