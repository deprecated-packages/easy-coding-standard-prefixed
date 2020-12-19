<?php

declare (strict_types=1);
namespace _PhpScoper065e4ba46e6d\PhpParser\ErrorHandler;

use _PhpScoper065e4ba46e6d\PhpParser\Error;
use _PhpScoper065e4ba46e6d\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper065e4ba46e6d\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper065e4ba46e6d\PhpParser\Error $error)
    {
        throw $error;
    }
}
