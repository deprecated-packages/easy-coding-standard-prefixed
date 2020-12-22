<?php

declare (strict_types=1);
namespace _PhpScoper57272265e1c9\PhpParser\ErrorHandler;

use _PhpScoper57272265e1c9\PhpParser\Error;
use _PhpScoper57272265e1c9\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper57272265e1c9\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper57272265e1c9\PhpParser\Error $error)
    {
        throw $error;
    }
}
