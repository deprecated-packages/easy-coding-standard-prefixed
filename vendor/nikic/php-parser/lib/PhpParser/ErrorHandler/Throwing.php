<?php

declare (strict_types=1);
namespace _PhpScoper5ade29b97028\PhpParser\ErrorHandler;

use _PhpScoper5ade29b97028\PhpParser\Error;
use _PhpScoper5ade29b97028\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper5ade29b97028\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper5ade29b97028\PhpParser\Error $error)
    {
        throw $error;
    }
}
