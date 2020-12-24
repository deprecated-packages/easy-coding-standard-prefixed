<?php

declare (strict_types=1);
namespace _PhpScoper5ca2d8bcb02c\PhpParser\ErrorHandler;

use _PhpScoper5ca2d8bcb02c\PhpParser\Error;
use _PhpScoper5ca2d8bcb02c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper5ca2d8bcb02c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper5ca2d8bcb02c\PhpParser\Error $error)
    {
        throw $error;
    }
}
