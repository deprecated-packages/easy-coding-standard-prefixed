<?php

declare (strict_types=1);
namespace _PhpScoper7574e8786845\PhpParser\ErrorHandler;

use _PhpScoper7574e8786845\PhpParser\Error;
use _PhpScoper7574e8786845\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper7574e8786845\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper7574e8786845\PhpParser\Error $error)
    {
        throw $error;
    }
}
