<?php

declare (strict_types=1);
namespace _PhpScoper207eb8f99af3\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper207eb8f99af3\PhpParser\Error $error);
}
