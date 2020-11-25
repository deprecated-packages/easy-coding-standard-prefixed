<?php

declare (strict_types=1);
namespace _PhpScoper38a7d00685f8\PhpParser\ErrorHandler;

use _PhpScoper38a7d00685f8\PhpParser\Error;
use _PhpScoper38a7d00685f8\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper38a7d00685f8\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper38a7d00685f8\PhpParser\Error $error)
    {
        throw $error;
    }
}
