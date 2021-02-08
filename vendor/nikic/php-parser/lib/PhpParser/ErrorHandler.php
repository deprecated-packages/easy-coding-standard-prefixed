<?php

declare (strict_types=1);
namespace _PhpScoper326af2119eba\PhpParser;

interface ErrorHandler
{
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
    public function handleError(\_PhpScoper326af2119eba\PhpParser\Error $error);
}
