<?php

declare (strict_types=1);
namespace _PhpScopera6f918786d5c\PhpParser\ErrorHandler;

use _PhpScopera6f918786d5c\PhpParser\Error;
use _PhpScopera6f918786d5c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera6f918786d5c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera6f918786d5c\PhpParser\Error $error)
    {
        throw $error;
    }
}
