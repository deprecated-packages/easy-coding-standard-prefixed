<?php

declare (strict_types=1);
namespace _PhpScoper629192f0909b\PhpParser\ErrorHandler;

use _PhpScoper629192f0909b\PhpParser\Error;
use _PhpScoper629192f0909b\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper629192f0909b\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper629192f0909b\PhpParser\Error $error)
    {
        throw $error;
    }
}
