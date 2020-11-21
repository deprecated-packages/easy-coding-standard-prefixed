<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\PhpParser\ErrorHandler;

use _PhpScoper224ae0b86670\PhpParser\Error;
use _PhpScoper224ae0b86670\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper224ae0b86670\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper224ae0b86670\PhpParser\Error $error)
    {
        throw $error;
    }
}
