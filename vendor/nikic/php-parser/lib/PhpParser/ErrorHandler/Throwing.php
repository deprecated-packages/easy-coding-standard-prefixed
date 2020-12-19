<?php

declare (strict_types=1);
namespace _PhpScoper8751341571b5\PhpParser\ErrorHandler;

use _PhpScoper8751341571b5\PhpParser\Error;
use _PhpScoper8751341571b5\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper8751341571b5\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper8751341571b5\PhpParser\Error $error)
    {
        throw $error;
    }
}
