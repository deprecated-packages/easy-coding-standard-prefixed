<?php

declare (strict_types=1);
namespace _PhpScoper9e3283ae8193\PhpParser\ErrorHandler;

use _PhpScoper9e3283ae8193\PhpParser\Error;
use _PhpScoper9e3283ae8193\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper9e3283ae8193\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper9e3283ae8193\PhpParser\Error $error)
    {
        throw $error;
    }
}
