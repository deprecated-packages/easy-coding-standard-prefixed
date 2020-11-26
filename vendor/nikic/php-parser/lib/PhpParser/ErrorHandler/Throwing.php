<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736\PhpParser\ErrorHandler;

use _PhpScopercb217fd4e736\PhpParser\Error;
use _PhpScopercb217fd4e736\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScopercb217fd4e736\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScopercb217fd4e736\PhpParser\Error $error)
    {
        throw $error;
    }
}
