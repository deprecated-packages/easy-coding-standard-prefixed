<?php

declare (strict_types=1);
namespace _PhpScoper89c09b8e7101\PhpParser\ErrorHandler;

use _PhpScoper89c09b8e7101\PhpParser\Error;
use _PhpScoper89c09b8e7101\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper89c09b8e7101\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper89c09b8e7101\PhpParser\Error $error)
    {
        throw $error;
    }
}
