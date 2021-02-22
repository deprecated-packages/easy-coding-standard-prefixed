<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser\ErrorHandler;

use _PhpScoperfcee700af3df\PhpParser\Error;
use _PhpScoperfcee700af3df\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfcee700af3df\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfcee700af3df\PhpParser\Error $error)
    {
        throw $error;
    }
}
