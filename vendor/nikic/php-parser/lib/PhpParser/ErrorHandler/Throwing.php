<?php

declare (strict_types=1);
namespace _PhpScoper246d7c16d32f\PhpParser\ErrorHandler;

use _PhpScoper246d7c16d32f\PhpParser\Error;
use _PhpScoper246d7c16d32f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper246d7c16d32f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper246d7c16d32f\PhpParser\Error $error)
    {
        throw $error;
    }
}
