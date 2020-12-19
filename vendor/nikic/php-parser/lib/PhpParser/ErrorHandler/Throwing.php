<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser\ErrorHandler;

use _PhpScopera8f555a7493c\PhpParser\Error;
use _PhpScopera8f555a7493c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera8f555a7493c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera8f555a7493c\PhpParser\Error $error)
    {
        throw $error;
    }
}
