<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b\PhpParser\ErrorHandler;

use _PhpScoper807f8e74693b\PhpParser\Error;
use _PhpScoper807f8e74693b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper807f8e74693b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper807f8e74693b\PhpParser\Error $error)
    {
        throw $error;
    }
}
