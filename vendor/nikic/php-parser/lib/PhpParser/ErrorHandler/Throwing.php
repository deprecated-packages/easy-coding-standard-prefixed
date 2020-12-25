<?php

declare (strict_types=1);
namespace _PhpScoper745103eaabcd\PhpParser\ErrorHandler;

use _PhpScoper745103eaabcd\PhpParser\Error;
use _PhpScoper745103eaabcd\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper745103eaabcd\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper745103eaabcd\PhpParser\Error $error)
    {
        throw $error;
    }
}
