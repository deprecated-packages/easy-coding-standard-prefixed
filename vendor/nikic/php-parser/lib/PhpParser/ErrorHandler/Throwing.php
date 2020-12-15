<?php

declare (strict_types=1);
namespace _PhpScoper80dbed43490f\PhpParser\ErrorHandler;

use _PhpScoper80dbed43490f\PhpParser\Error;
use _PhpScoper80dbed43490f\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper80dbed43490f\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper80dbed43490f\PhpParser\Error $error)
    {
        throw $error;
    }
}
