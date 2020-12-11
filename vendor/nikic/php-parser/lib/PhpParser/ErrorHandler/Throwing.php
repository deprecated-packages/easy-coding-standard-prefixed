<?php

declare (strict_types=1);
namespace _PhpScoper23ef26a4fb01\PhpParser\ErrorHandler;

use _PhpScoper23ef26a4fb01\PhpParser\Error;
use _PhpScoper23ef26a4fb01\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper23ef26a4fb01\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper23ef26a4fb01\PhpParser\Error $error)
    {
        throw $error;
    }
}
