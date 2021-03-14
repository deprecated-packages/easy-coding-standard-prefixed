<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\PhpParser\ErrorHandler;

use _PhpScoperfb0714773dc5\PhpParser\Error;
use _PhpScoperfb0714773dc5\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfb0714773dc5\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfb0714773dc5\PhpParser\Error $error)
    {
        throw $error;
    }
}
