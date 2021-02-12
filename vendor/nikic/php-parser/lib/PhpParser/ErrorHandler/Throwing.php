<?php

declare (strict_types=1);
namespace _PhpScoper4fc0030e9d22\PhpParser\ErrorHandler;

use _PhpScoper4fc0030e9d22\PhpParser\Error;
use _PhpScoper4fc0030e9d22\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoper4fc0030e9d22\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoper4fc0030e9d22\PhpParser\Error $error)
    {
        throw $error;
    }
}
