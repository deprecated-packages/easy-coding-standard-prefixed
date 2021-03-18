<?php

declare (strict_types=1);
namespace _PhpScoper5f6e904600e7\PhpParser\ErrorHandler;

use _PhpScoper5f6e904600e7\PhpParser\Error;
use _PhpScoper5f6e904600e7\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper5f6e904600e7\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper5f6e904600e7\PhpParser\Error $error)
    {
        throw $error;
    }
}
