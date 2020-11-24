<?php

declare (strict_types=1);
namespace _PhpScoperf3d5f0921050\PhpParser\ErrorHandler;

use _PhpScoperf3d5f0921050\PhpParser\Error;
use _PhpScoperf3d5f0921050\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperf3d5f0921050\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperf3d5f0921050\PhpParser\Error $error)
    {
        throw $error;
    }
}
