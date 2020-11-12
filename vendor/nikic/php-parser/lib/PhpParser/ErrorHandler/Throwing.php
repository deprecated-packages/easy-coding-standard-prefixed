<?php

declare (strict_types=1);
namespace _PhpScoper7cef7256eba6\PhpParser\ErrorHandler;

use _PhpScoper7cef7256eba6\PhpParser\Error;
use _PhpScoper7cef7256eba6\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper7cef7256eba6\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper7cef7256eba6\PhpParser\Error $error)
    {
        throw $error;
    }
}
