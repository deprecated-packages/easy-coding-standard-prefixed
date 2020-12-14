<?php

declare (strict_types=1);
namespace _PhpScoper8a0112f19f39\PhpParser\ErrorHandler;

use _PhpScoper8a0112f19f39\PhpParser\Error;
use _PhpScoper8a0112f19f39\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper8a0112f19f39\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper8a0112f19f39\PhpParser\Error $error)
    {
        throw $error;
    }
}
