<?php

declare (strict_types=1);
namespace _PhpScoper89ec3c69e67d\PhpParser\ErrorHandler;

use _PhpScoper89ec3c69e67d\PhpParser\Error;
use _PhpScoper89ec3c69e67d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper89ec3c69e67d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper89ec3c69e67d\PhpParser\Error $error)
    {
        throw $error;
    }
}
