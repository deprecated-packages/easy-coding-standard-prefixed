<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565\PhpParser\ErrorHandler;

use _PhpScoper6a0a7eb6e565\PhpParser\Error;
use _PhpScoper6a0a7eb6e565\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper6a0a7eb6e565\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper6a0a7eb6e565\PhpParser\Error $error)
    {
        throw $error;
    }
}
