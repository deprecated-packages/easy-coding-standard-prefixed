<?php

declare (strict_types=1);
namespace _PhpScoper7faa8deb0d3c\PhpParser\ErrorHandler;

use _PhpScoper7faa8deb0d3c\PhpParser\Error;
use _PhpScoper7faa8deb0d3c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper7faa8deb0d3c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper7faa8deb0d3c\PhpParser\Error $error)
    {
        throw $error;
    }
}
