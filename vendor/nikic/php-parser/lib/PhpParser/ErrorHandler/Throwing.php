<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b\PhpParser\ErrorHandler;

use _PhpScoperfb2c402b972b\PhpParser\Error;
use _PhpScoperfb2c402b972b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperfb2c402b972b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperfb2c402b972b\PhpParser\Error $error)
    {
        throw $error;
    }
}
