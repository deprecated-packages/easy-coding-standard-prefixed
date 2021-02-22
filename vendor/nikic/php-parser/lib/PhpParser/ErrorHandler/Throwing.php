<?php

declare (strict_types=1);
namespace _PhpScoper10b1b2c5ca55\PhpParser\ErrorHandler;

use _PhpScoper10b1b2c5ca55\PhpParser\Error;
use _PhpScoper10b1b2c5ca55\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper10b1b2c5ca55\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper10b1b2c5ca55\PhpParser\Error $error)
    {
        throw $error;
    }
}
