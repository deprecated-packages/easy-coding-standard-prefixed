<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\PhpParser\ErrorHandler;

use _PhpScoper2a8ad010dfbd\PhpParser\Error;
use _PhpScoper2a8ad010dfbd\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper2a8ad010dfbd\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper2a8ad010dfbd\PhpParser\Error $error)
    {
        throw $error;
    }
}
