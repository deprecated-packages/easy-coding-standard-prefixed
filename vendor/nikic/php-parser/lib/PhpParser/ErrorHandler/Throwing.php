<?php

declare (strict_types=1);
namespace _PhpScoper611f49771945\PhpParser\ErrorHandler;

use _PhpScoper611f49771945\PhpParser\Error;
use _PhpScoper611f49771945\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper611f49771945\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper611f49771945\PhpParser\Error $error)
    {
        throw $error;
    }
}
