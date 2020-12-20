<?php

declare (strict_types=1);
namespace _PhpScoper32136251d417\PhpParser\ErrorHandler;

use _PhpScoper32136251d417\PhpParser\Error;
use _PhpScoper32136251d417\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper32136251d417\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper32136251d417\PhpParser\Error $error)
    {
        throw $error;
    }
}
