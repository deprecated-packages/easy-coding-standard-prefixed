<?php

declare (strict_types=1);
namespace _PhpScoper7f5523334c1b\PhpParser\ErrorHandler;

use _PhpScoper7f5523334c1b\PhpParser\Error;
use _PhpScoper7f5523334c1b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper7f5523334c1b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper7f5523334c1b\PhpParser\Error $error)
    {
        throw $error;
    }
}
