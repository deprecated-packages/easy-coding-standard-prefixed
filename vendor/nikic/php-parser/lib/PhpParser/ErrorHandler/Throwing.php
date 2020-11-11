<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\PhpParser\ErrorHandler;

use _PhpScoper0f5cd390c37a\PhpParser\Error;
use _PhpScoper0f5cd390c37a\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper0f5cd390c37a\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper0f5cd390c37a\PhpParser\Error $error)
    {
        throw $error;
    }
}
