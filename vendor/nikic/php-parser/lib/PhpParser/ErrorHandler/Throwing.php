<?php

declare (strict_types=1);
namespace _PhpScoper58a0a169dcfb\PhpParser\ErrorHandler;

use _PhpScoper58a0a169dcfb\PhpParser\Error;
use _PhpScoper58a0a169dcfb\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper58a0a169dcfb\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper58a0a169dcfb\PhpParser\Error $error)
    {
        throw $error;
    }
}
