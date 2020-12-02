<?php

declare (strict_types=1);
namespace _PhpScopera34ae19e8d40\PhpParser\ErrorHandler;

use _PhpScopera34ae19e8d40\PhpParser\Error;
use _PhpScopera34ae19e8d40\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera34ae19e8d40\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera34ae19e8d40\PhpParser\Error $error)
    {
        throw $error;
    }
}
