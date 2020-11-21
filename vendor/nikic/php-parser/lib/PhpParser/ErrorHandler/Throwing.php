<?php

declare (strict_types=1);
namespace _PhpScoper3639953bb9e5\PhpParser\ErrorHandler;

use _PhpScoper3639953bb9e5\PhpParser\Error;
use _PhpScoper3639953bb9e5\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper3639953bb9e5\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper3639953bb9e5\PhpParser\Error $error)
    {
        throw $error;
    }
}
