<?php

declare (strict_types=1);
namespace _PhpScopera23ebff5477f\PhpParser\ErrorHandler;

use _PhpScopera23ebff5477f\PhpParser\Error;
use _PhpScopera23ebff5477f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera23ebff5477f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera23ebff5477f\PhpParser\Error $error)
    {
        throw $error;
    }
}
