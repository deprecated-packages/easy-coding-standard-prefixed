<?php

declare (strict_types=1);
namespace _PhpScoper269dc521b0fa\PhpParser\ErrorHandler;

use _PhpScoper269dc521b0fa\PhpParser\Error;
use _PhpScoper269dc521b0fa\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper269dc521b0fa\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper269dc521b0fa\PhpParser\Error $error)
    {
        throw $error;
    }
}
