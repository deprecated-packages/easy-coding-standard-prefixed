<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d\PhpParser\ErrorHandler;

use _PhpScopercae980ebf12d\PhpParser\Error;
use _PhpScopercae980ebf12d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopercae980ebf12d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopercae980ebf12d\PhpParser\Error $error)
    {
        throw $error;
    }
}
