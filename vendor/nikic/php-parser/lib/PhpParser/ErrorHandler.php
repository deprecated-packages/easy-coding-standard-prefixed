<?php

declare (strict_types=1);
namespace _PhpScoper68a3a2539032\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper68a3a2539032\PhpParser\Error $error);
}
