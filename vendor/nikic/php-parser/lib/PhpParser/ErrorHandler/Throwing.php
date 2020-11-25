<?php

declare (strict_types=1);
namespace _PhpScoper13133e188f67\PhpParser\ErrorHandler;

use _PhpScoper13133e188f67\PhpParser\Error;
use _PhpScoper13133e188f67\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper13133e188f67\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper13133e188f67\PhpParser\Error $error)
    {
        throw $error;
    }
}
