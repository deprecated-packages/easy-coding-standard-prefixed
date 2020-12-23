<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PhpParser\ErrorHandler;

use _PhpScoperd9fcac9e904f\PhpParser\Error;
use _PhpScoperd9fcac9e904f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd9fcac9e904f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd9fcac9e904f\PhpParser\Error $error)
    {
        throw $error;
    }
}
