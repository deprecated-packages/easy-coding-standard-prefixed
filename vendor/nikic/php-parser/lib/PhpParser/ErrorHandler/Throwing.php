<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99\PhpParser\ErrorHandler;

use _PhpScoperfab1bfb7ec99\PhpParser\Error;
use _PhpScoperfab1bfb7ec99\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfab1bfb7ec99\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfab1bfb7ec99\PhpParser\Error $error)
    {
        throw $error;
    }
}
