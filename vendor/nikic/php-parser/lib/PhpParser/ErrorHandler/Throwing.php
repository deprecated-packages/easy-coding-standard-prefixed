<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\PhpParser\ErrorHandler;

use _PhpScopere5e7dca8c031\PhpParser\Error;
use _PhpScopere5e7dca8c031\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopere5e7dca8c031\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopere5e7dca8c031\PhpParser\Error $error)
    {
        throw $error;
    }
}
