<?php

declare (strict_types=1);
namespace _PhpScoper02b5d1bf8fec\PhpParser\ErrorHandler;

use _PhpScoper02b5d1bf8fec\PhpParser\Error;
use _PhpScoper02b5d1bf8fec\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper02b5d1bf8fec\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper02b5d1bf8fec\PhpParser\Error $error)
    {
        throw $error;
    }
}
