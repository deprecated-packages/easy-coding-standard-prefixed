<?php

declare (strict_types=1);
namespace _PhpScoper592524ba34f0\PhpParser\ErrorHandler;

use _PhpScoper592524ba34f0\PhpParser\Error;
use _PhpScoper592524ba34f0\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper592524ba34f0\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper592524ba34f0\PhpParser\Error $error)
    {
        throw $error;
    }
}
