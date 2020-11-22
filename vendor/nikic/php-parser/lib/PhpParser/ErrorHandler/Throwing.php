<?php

declare (strict_types=1);
namespace _PhpScoper16399a42e87c\PhpParser\ErrorHandler;

use _PhpScoper16399a42e87c\PhpParser\Error;
use _PhpScoper16399a42e87c\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper16399a42e87c\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper16399a42e87c\PhpParser\Error $error)
    {
        throw $error;
    }
}
