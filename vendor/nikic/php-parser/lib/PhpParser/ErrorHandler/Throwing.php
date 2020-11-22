<?php

declare (strict_types=1);
namespace _PhpScoper6db4fde00cda\PhpParser\ErrorHandler;

use _PhpScoper6db4fde00cda\PhpParser\Error;
use _PhpScoper6db4fde00cda\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper6db4fde00cda\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper6db4fde00cda\PhpParser\Error $error)
    {
        throw $error;
    }
}
