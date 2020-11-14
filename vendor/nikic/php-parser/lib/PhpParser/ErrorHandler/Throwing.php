<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\PhpParser\ErrorHandler;

use _PhpScopera749ac204cd2\PhpParser\Error;
use _PhpScopera749ac204cd2\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera749ac204cd2\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera749ac204cd2\PhpParser\Error $error)
    {
        throw $error;
    }
}
