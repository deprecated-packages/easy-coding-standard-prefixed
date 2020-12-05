<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1\PhpParser\ErrorHandler;

use _PhpScoperaba240c3d5f1\PhpParser\Error;
use _PhpScoperaba240c3d5f1\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperaba240c3d5f1\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperaba240c3d5f1\PhpParser\Error $error)
    {
        throw $error;
    }
}
