<?php

declare (strict_types=1);
namespace _PhpScoper59ccd3f8e121\PhpParser\ErrorHandler;

use _PhpScoper59ccd3f8e121\PhpParser\Error;
use _PhpScoper59ccd3f8e121\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper59ccd3f8e121\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper59ccd3f8e121\PhpParser\Error $error)
    {
        throw $error;
    }
}
