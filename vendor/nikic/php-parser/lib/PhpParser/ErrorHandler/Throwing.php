<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\PhpParser\ErrorHandler;

use _PhpScopera189153e1f79\PhpParser\Error;
use _PhpScopera189153e1f79\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera189153e1f79\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera189153e1f79\PhpParser\Error $error)
    {
        throw $error;
    }
}
