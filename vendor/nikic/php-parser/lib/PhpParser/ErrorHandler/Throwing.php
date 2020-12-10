<?php

declare (strict_types=1);
namespace _PhpScoper3a22e8e0bd94\PhpParser\ErrorHandler;

use _PhpScoper3a22e8e0bd94\PhpParser\Error;
use _PhpScoper3a22e8e0bd94\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper3a22e8e0bd94\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper3a22e8e0bd94\PhpParser\Error $error)
    {
        throw $error;
    }
}
