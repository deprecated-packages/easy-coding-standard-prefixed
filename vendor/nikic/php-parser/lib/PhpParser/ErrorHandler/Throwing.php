<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\PhpParser\ErrorHandler;

use _PhpScoperd9c3b46af121\PhpParser\Error;
use _PhpScoperd9c3b46af121\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd9c3b46af121\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd9c3b46af121\PhpParser\Error $error)
    {
        throw $error;
    }
}
