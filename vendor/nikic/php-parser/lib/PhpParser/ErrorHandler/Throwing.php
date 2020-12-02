<?php

declare (strict_types=1);
namespace _PhpScoper2d2a405cc0f8\PhpParser\ErrorHandler;

use _PhpScoper2d2a405cc0f8\PhpParser\Error;
use _PhpScoper2d2a405cc0f8\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper2d2a405cc0f8\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper2d2a405cc0f8\PhpParser\Error $error)
    {
        throw $error;
    }
}
