<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f\PhpParser\ErrorHandler;

use _PhpScoperc4ea0f0bd23f\PhpParser\Error;
use _PhpScoperc4ea0f0bd23f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperc4ea0f0bd23f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperc4ea0f0bd23f\PhpParser\Error $error)
    {
        throw $error;
    }
}
