<?php

declare (strict_types=1);
namespace _PhpScoper6c2f17c43d2d\PhpParser\ErrorHandler;

use _PhpScoper6c2f17c43d2d\PhpParser\Error;
use _PhpScoper6c2f17c43d2d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper6c2f17c43d2d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper6c2f17c43d2d\PhpParser\Error $error)
    {
        throw $error;
    }
}
