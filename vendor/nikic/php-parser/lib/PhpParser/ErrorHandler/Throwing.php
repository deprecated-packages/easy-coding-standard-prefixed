<?php

declare (strict_types=1);
namespace _PhpScoper7c3fefba1fb9\PhpParser\ErrorHandler;

use _PhpScoper7c3fefba1fb9\PhpParser\Error;
use _PhpScoper7c3fefba1fb9\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper7c3fefba1fb9\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper7c3fefba1fb9\PhpParser\Error $error)
    {
        throw $error;
    }
}
