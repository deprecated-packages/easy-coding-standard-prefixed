<?php

declare (strict_types=1);
namespace _PhpScopera04bf8e97c06\PhpParser\ErrorHandler;

use _PhpScopera04bf8e97c06\PhpParser\Error;
use _PhpScopera04bf8e97c06\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopera04bf8e97c06\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopera04bf8e97c06\PhpParser\Error $error)
    {
        throw $error;
    }
}
