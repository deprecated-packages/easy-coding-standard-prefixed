<?php

declare (strict_types=1);
namespace _PhpScoper836bc32aecc2\PhpParser\ErrorHandler;

use _PhpScoper836bc32aecc2\PhpParser\Error;
use _PhpScoper836bc32aecc2\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper836bc32aecc2\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper836bc32aecc2\PhpParser\Error $error)
    {
        throw $error;
    }
}
