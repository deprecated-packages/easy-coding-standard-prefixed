<?php

declare (strict_types=1);
namespace _PhpScoper5c006f5f032f\PhpParser\ErrorHandler;

use _PhpScoper5c006f5f032f\PhpParser\Error;
use _PhpScoper5c006f5f032f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper5c006f5f032f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper5c006f5f032f\PhpParser\Error $error)
    {
        throw $error;
    }
}
