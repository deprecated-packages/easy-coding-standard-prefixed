<?php

declare (strict_types=1);
namespace _PhpScoper28ab463fc3ba\PhpParser\ErrorHandler;

use _PhpScoper28ab463fc3ba\PhpParser\Error;
use _PhpScoper28ab463fc3ba\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper28ab463fc3ba\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper28ab463fc3ba\PhpParser\Error $error)
    {
        throw $error;
    }
}
