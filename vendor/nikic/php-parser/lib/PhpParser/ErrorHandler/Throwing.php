<?php

declare (strict_types=1);
namespace _PhpScopere106f9fd4493\PhpParser\ErrorHandler;

use _PhpScopere106f9fd4493\PhpParser\Error;
use _PhpScopere106f9fd4493\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopere106f9fd4493\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopere106f9fd4493\PhpParser\Error $error)
    {
        throw $error;
    }
}
